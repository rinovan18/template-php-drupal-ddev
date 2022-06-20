<?php

namespace Drupal\jsonapi_extras\Plugin\jsonapi\FieldEnhancer;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\jsonapi_extras\Plugin\ResourceFieldEnhancerBase;
use Shaper\Util\Context;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Use URL for link field values.
 *
 * @ResourceFieldEnhancer(
 *   id = "url_link",
 *   label = @Translation("URL for link (link field only)"),
 *   description = @Translation("Use Url for link fields.")
 * )
 */
class UrlLinkEnhancer extends ResourceFieldEnhancerBase implements ContainerFactoryPluginInterface {

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, array $plugin_definition, EntityTypeManagerInterface $entity_type_manager) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->entityTypeManager = $entity_type_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('entity_type.manager')
    );
  }

  /**
   * {@inheritdoc}
   */
  protected function doUndoTransform($data, Context $context) {
    if (isset($data['uri'])) {

      // Transform internal links.
      preg_match("/internal:(.*)/", $data['uri'], $parsed_uri);
      if (!empty($parsed_uri)) {
        $values = [
          'url' => $parsed_uri[1],
          'title' => $data['title']
        ];
        return $values += $data['options'];
      }

      preg_match("/entity:(.*)\/(.*)/", $data['uri'], $parsed_uri);
      if (!empty($parsed_uri)) {
        $entity_type = $parsed_uri[1];
        $entity_id = $parsed_uri[2];
        $entity = $this->entityTypeManager->getStorage($entity_type)->load($entity_id);
        $values = [
          'url' => $entity instanceof \Drupal\core\Entity\EntityInterface ? $entity->toUrl()->toString() : '',
          'title' => $data['title']
        ];
        return $values += $data['options'];
      }

      $values = [
        'url' => $data['uri'],
        'title' => $data['title']
      ];
      return $values += $data['options'];
    }
  }

  /**
   * {@inheritdoc}
   */
  protected function doTransform($value, Context $context) {
  }

  /**
   * {@inheritdoc}
   */
  public function getOutputJsonSchema() {
    return [
      'type' => 'object',
    ];
  }

}
