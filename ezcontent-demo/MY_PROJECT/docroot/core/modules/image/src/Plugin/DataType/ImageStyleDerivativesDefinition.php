<?php

namespace Drupal\image\Plugin\DataType;

use Drupal\Core\Cache\CacheableDependencyInterface;
use Drupal\Core\Cache\CacheableDependencyTrait;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\Core\TypedData\MapDataDefinition;
use Drupal\image\Entity\ImageStyle;

/**
 * The definition of image style list, containing "width", "height" and "url".
 *
 * @see \Drupal\image\Plugin\DataType\ComputedImageStyleDerivatives
 * @see \Drupal\image\Plugin\Field\FieldType\ImageItem::propertyDefinitions()
 */
class ImageStyleDerivativesDefinition extends MapDataDefinition implements CacheableDependencyInterface {

  use CacheableDependencyTrait;

  /**
   * {@inheritdoc}
   */
  public function getPropertyDefinitions() {
    if (isset($this->propertyDefinitions)) {
      return $this->propertyDefinitions;
    }
    $image_style_definition = MapDataDefinition::create();
    $image_style_definition->setPropertyDefinition('url', DataDefinition::create('uri'));
    $image_style_definition->setPropertyDefinition('width', DataDefinition::create('integer'));
    $image_style_definition->setPropertyDefinition('height', DataDefinition::create('integer'));
    // Map image style IDs to a definition.
    $derivatives = NULL;
    \Drupal::moduleHandler()
      ->alter('image_derivatives_exposed_image_style_ids', $derivatives);
    $this->propertyDefinitions = array_map(function () use ($image_style_definition) {
      return $image_style_definition;
    }, ImageStyle::loadMultiple($derivatives));
    return $this->propertyDefinitions;
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheTags() {
    return ['config:image_style_list'];
  }

}
