<?php

namespace Drupal\lb_direct_add;

use Drupal\Core\Render\Element;
use Drupal\Core\Security\TrustedCallbackInterface;
use Drupal\Core\Url;

/**
 * Implements preRender for layout builder.
 */
class LayoutBuilder implements TrustedCallbackInterface {

  /**
   * {@inheritdoc}
   */
  public static function trustedCallbacks() {
    return ['preRender'];
  }

  /**
   * Alters layout builder to use dropbuttons to add custom blocks.
   */
  public static function preRender($element) {
    $inline_blocks_category = (string) t('Inline blocks');
    $lb = &$element['layout_builder'];

    $section_storage = $element['#section_storage'];

    // @todo Is there a better way to find the delta value?
    $delta = 0;

    $contexts = \Drupal::service('context.repository')->getAvailableContexts();

    $storage_type = $section_storage->getStorageType();
    $storage_id = $section_storage->getStorageId();
    $block_manager = \Drupal::getContainer()->get('plugin.manager.block');

    // Get restriction definitions,
    // if 'layout_builder_restrictions' is installed.
    $restriction_plugins = NULL;
    $layout_builder_restrictions_manager = NULL;
    if (\Drupal::moduleHandler()->moduleExists('layout_builder_restrictions')) {
      $layout_builder_restrictions_manager = \Drupal::service('plugin.manager.layout_builder_restriction');
      // Retrieve defined Layout Builder Restrictions plugins.
      $restriction_plugins = $layout_builder_restrictions_manager->getSortedPlugins();
    }

    // Check if add label to list is enable.
    $config = \Drupal::service('config.factory')->get('lb_direct_add.settings');
    if ($config->get('add_label_to_list')) {
      $element['#attached']['library'][] = 'lb_direct_add/add_label';
    }

    // Loop through each section.
    foreach (Element::children($lb) as $section) {
      if (isset($lb[$section]['layout-builder__section'])) {
        // Loop through each region.
        foreach (Element::children($lb[$section]['layout-builder__section']) as $region) {
          // Based on Drupal\layout_builder\Controller\ChooseBlockController::inlineBlockList()
          $definitions = $block_manager->getFilteredDefinitions('layout_builder', $contexts, [
            'section_storage' => $section_storage,
            'region' => $region,
            'list' => 'inline_blocks',
          ]);

          $blocks = $block_manager->getGroupedDefinitions($definitions);

          $links = [];
          if ($config->get('add_label_to_list')) {
            $links[] = [
              'title' => $config->get('label_name'),
              'attributes' => [
                'class' => ['open-list-label'],
              ],
            ];
          }
          if (isset($blocks[$inline_blocks_category])) {
            // Remove 'layout_builder_restrictions'
            // filtered blocks, if applicable.
            if ($restriction_plugins && $layout_builder_restrictions_manager) {
              foreach (array_keys($restriction_plugins) as $id) {
                $plugin = $layout_builder_restrictions_manager->createInstance($id);
                $allowed_inline_blocks = $plugin->inlineBlocksAllowedinContext($section_storage, $delta, $region);

                // Loop through links and remove
                // those for disallowed inline block types.
                foreach ($blocks[$inline_blocks_category] as $block_id => $block) {
                  if (!in_array($block_id, $allowed_inline_blocks)) {
                    unset($blocks[$inline_blocks_category][$block_id]);
                  }
                }
              }
            }

            foreach ($blocks[$inline_blocks_category] as $block_id => $block) {
              $attributes = [
                'class' => [
                  'use-ajax',
                ],
                'data-dialog-type' => 'dialog',
                'data-dialog-renderer' => 'off_canvas',
              ];
              $attributes['class'][] = 'js-layout-builder-block-link';
              $link = [
                'title' => "Add {$block['admin_label']}",
                'url' => Url::fromRoute('layout_builder.add_block',
                  [
                    'section_storage_type' => $section_storage->getStorageType(),
                    'section_storage' => $section_storage->getStorageId(),
                    'delta' => $delta,
                    'region' => $region,
                    'plugin_id' => $block_id,
                  ]
                ),
                'attributes' => $attributes,
              ];

              $links[] = $link;
            }
          }

          $links['other'] = [
            'title' => t('More<span class="visually-hidden"> options</span>...'),
            'url' => Url::fromRoute('layout_builder.choose_block',
              [
                'section_storage_type' => $storage_type,
                'section_storage' => $storage_id,
                'delta' => $delta,
                'region' => $region,
              ],
              [
                'attributes' => [
                  'class' => [
                    'use-ajax',
                  ],
                  'data-dialog-type' => 'dialog',
                  'data-dialog-renderer' => 'off_canvas',
                ],
              ]
            ),
          ];

          $lb[$section]['layout-builder__section'][$region]['layout_builder_add_block']['button'] = [
            '#type' => 'dropbutton',
            '#links' => $links,
          ];

          unset($lb[$section]['layout-builder__section'][$region]['layout_builder_add_block']['link']);
        }

        // @todo Is there a better way to find the delta value?
        $delta++;
      }
    }

    return $element;
  }

}
