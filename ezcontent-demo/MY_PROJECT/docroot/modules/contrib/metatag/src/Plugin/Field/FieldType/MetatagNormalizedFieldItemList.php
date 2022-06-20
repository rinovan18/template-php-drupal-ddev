<?php

namespace Drupal\Metatag\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemList;
use Drupal\Core\TypedData\ComputedItemListTrait;

/**
 * Represents the computed metatags for an entity.
 */
class MetatagNormalizedFieldItemList extends FieldItemList {

  use ComputedItemListTrait;

  /**
   * {@inheritdoc}
   */
  protected function computeValue() {
    $entity = $this->getEntity();
    if (!$entity->id()) {
      return;
    }
    $metatag_manager = \Drupal::service('metatag.manager');
    $metatags_for_entity = $metatag_manager->tagsFromEntityWithDefaults($entity);
    $tags = $metatag_manager->generateRawElements($metatags_for_entity, $entity);
    $offset = 0;
    foreach ($tags as $tag) {
      $item = [
        'tag' => $tag['#tag'],
        'attributes' => $tag['#attributes'],
      ];
      $this->list[] = $this->createItem($offset, $item);
      $offset++;
    }
  }

}
