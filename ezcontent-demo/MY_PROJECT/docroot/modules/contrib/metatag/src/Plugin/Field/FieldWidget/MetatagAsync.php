<?php

namespace Drupal\metatag\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\Html;
use Drupal\Component\Utility\NestedArray;
use Drupal\Core\Render\Element;

/**
 * Extra widget for metatag field.
 *
 * @FieldWidget(
 *   id = "metatag_async",
 *   label = @Translation("Asynchronous meta tags form (JS required)"),
 *   field_types = {
 *     "metatag"
 *   }
 * )
 */
class MetatagAsync extends MetatagFirehose {

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    // Complete asynchronous form by default.
    $settings = [];

    $metatag_manager = \Drupal::service('metatag.manager');
    $metatag_groups = $metatag_manager->sortedGroups();

    foreach ($metatag_groups as $group_name => $group) {
      $settings['async_groups'][$group_name] = $group_name;
    }

    return $settings + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $form = parent::settingsForm($form, $form_state);

    $options = [];
    $metatag_groups = $this->metatagManager->sortedGroups();
    foreach ($metatag_groups as $group_name => $group_info) {
      $options[$group_name] = $group_info['label'];
    }

    $form['async_groups'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Groups to load asynchronously'),
      '#options' => $options,
      '#default_value' => $this->getSetting('async_groups'),
      '#states' => [
          'visible' => [
              'input[name$="[async_all]"]' => ['checked' => FALSE],
            ],
        ],
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = parent::settingsSummary();

    $async_groups = $this->getAsyncGroups();

    $items = [];
    $metatag_groups = $this->metatagManager->sortedGroups();
    foreach ($metatag_groups as $group_name => $group_info) {
      if (in_array($group_name, $async_groups)) {
        $items[] = $group_info['label'];
      }
    }

    if (empty($items)) {
      $summary[] = $this->t('Complete synchronous form');
    }
    elseif (count($metatag_groups) == count($items)) {
      $summary[] = $this->t('Complete asynchronous form');
    }
    else {
      $list_array = [
          '#theme' => 'item_list',
          '#items' => $items,
        ];

      $list = \Drupal::service('renderer')->render($list_array);

      $summary[] = $this->t('Groups to load asynchronously:');
      $summary[] = $list;
    }

    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    // Build the original form element.
    $element = parent::formElement($items, $delta, $element, $form, $form_state);

    // Get the triggering element if any.
    $trigger = $form_state->getTriggeringElement();

    // Determine the groups to load asynchronously.
    $async_groups = $this->getAsyncGroups();

    // Collect the element data.
    $parents = $element['#field_parents'];
    $field_name = $this->fieldDefinition->getName();

    $async_items = FALSE;

    // Conditionally alter the form element children.
    foreach (Element::children($element) as $child) {
      if (!empty($element[$child]['#type']) &&
        $element[$child]['#type'] == 'details' &&
        !empty($async_groups[$child]) &&
        (empty($trigger['#name']) || $trigger['#name'] != $child)
      ) {
        $async_items = TRUE;

        // Collapse details element.
        $element[$child]['#open'] = FALSE;

        $plugin = '';

        // Cut off all plugin fields.
        foreach (Element::children($element[$child]) as $field_name) {
            unset($element[$child][$field_name]);
          if (!$plugin) {
            $plugin = $field_name;
          }
        }

      // Set the wrapper ID.
      $details_id = Html::getUniqueId('edit-' . $this->fieldDefinition->getName() . '-' . $child);
      $element[$child]['#attributes']['id'] = $details_id;

      $element[$child][$plugin] = [
        '#type' => 'submit',
        '#attributes' => [
            'class' => ['js-hide'],
          ],
        '#submit' => [[get_class($this), 'asyncActionSubmit']],
        '#name' => $child,
        '#limit_validation_errors' => [
            array_merge($parents, [
                $field_name,
              ]),
          ],
        '#ajax' => [
            'callback' => [get_class($this), 'updateWidgetCallback'],
            'wrapper' => $details_id,
          ],
        ];
      }
      elseif (!empty($trigger['#name']) && $trigger['#name'] == $child) {
        $element[$child]['#open'] = TRUE;
      }
    }

    if ($async_items) {
      $element['#attributes']['class'] = ['metatag-async-widget'];
      $element['#attached']['library'][] = 'metatag/metatag.field.widget.metatag_async';
    }

    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function extractFormValues(FieldItemListInterface $items, array $form, FormStateInterface $form_state) {
    $field_name = $this->fieldDefinition->getName();

    // Extract the values from $form_state->getValues().
    $path = array_merge($form['#parents'], [$field_name]);
    // Using getUserInput() because it retains submitted values on subsequent
    // calls to extractFormValues() when getValues() does not.
    $values = NestedArray::getValue($form_state->getUserInput(), $path, $key_exists);
    $saved_values = $items->isEmpty() ? [] : unserialize($items->getString());

    // Massage the submitted values.
    $tag_manager = \Drupal::service('plugin.manager.metatag.tag');
    foreach ($values as $value) {
      foreach ($value as $group) {
        if (is_array($group)) {
          foreach ($group as $tag_id => $tag_value) {
            $tag = $tag_manager->createInstance($tag_id);
            $tag->setValue($tag_value);
            if (!empty($tag->value())) {
              $saved_values[$tag_id] = $tag->value();
            }
            else {
              // When saving a node without opening any Groups, fields with
              // custom values are set to NULL. Don't unset NULL values,
              // otherwise we lose previously set values.
              if (!is_null($tag_value)) {
                // Unsetting, otherwise we can't remove custom values.
                unset($saved_values[$tag_id]);
              }
            }
          }
        }
      }
    }

    // Assign the values and remove the empty ones.
    $items->setValue(serialize($saved_values));
    $items->filterEmptyItems();

    // Put delta mapping in $form_state, so that flagErrors() can use it.
    $field_state = static::getWidgetState($form['#parents'], $field_name, $form_state);
    foreach ($items as $delta => $item) {
      $field_state['original_deltas'][$delta] = isset($item->_original_delta) ? $item->_original_delta : $delta;
      unset($item->_original_delta, $item->_weight);
    }
    static::setWidgetState($form['#parents'], $field_name, $form_state, $field_state);

  }

  /**
   * Action callback.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public static function asyncActionSubmit(array $form, FormStateInterface $form_state) {
    $form_state->setRebuild();
  }

  /**
   * AJAX action callback.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The associative array containing the structure of the updated element.
   */
  public static function updateWidgetCallback(array &$form, FormStateInterface $form_state) {
    // Get the element to replace.
    $trigger = $form_state->getTriggeringElement();
    $parents = array_slice($trigger['#array_parents'], 0, -1);
    $element = NestedArray::getValue($form, $parents);

    return $element;
  }

  /**
   * Returns asynchronous groups as array values.
   *
   * @return array
   *   Groups to load asynchronously.
   */
  protected function getAsyncGroups() {
    // Get default async groups settings.
    $defaults = self::defaultSettings();
    $async_groups = empty($defaults['async_groups']) ? [] : $defaults['async_groups'];

    // Merge with configured async groups settings if any.
    if ($settings = $this->getSetting('async_groups')) {
      $async_groups = array_merge($async_groups, $settings);
    }

    return array_filter($async_groups);
  }

}
