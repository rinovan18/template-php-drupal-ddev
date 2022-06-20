<?php

namespace Drupal\image\Plugin\DataType;

use Drupal\Core\Cache\CacheableDependencyInterface;
use Drupal\Core\Cache\RefinableCacheableDependencyInterface;
use Drupal\Core\Cache\RefinableCacheableDependencyTrait;
use Drupal\Core\TypedData\Plugin\DataType\Map;
use Drupal\file\FileInterface;
use Drupal\image\ImageStyleInterface;

/**
 * Computed image style derivatives class.
 *
 * @ingroup typed_data
 * @see \Drupal\image\Entity\ImageStyle
 *
 * @DataType(
 *   id = "image_style_derivatives",
 *   label = @Translation("Image style derivatives"),
 *   definition_class = "\Drupal\image\Plugin\DataType\ImageStyleDerivativesDefinition",
 * )
 */
class ComputedImageStyleDerivatives extends Map implements RefinableCacheableDependencyInterface {

  use RefinableCacheableDependencyTrait;

  /**
   * Whether the values have already been computed or not.
   *
   * @var bool
   */
  protected $valueComputed = FALSE;

  /**
   * Ensures that values are only computed once.
   */
  protected function ensureComputedValue() {
    if ($this->valueComputed === FALSE) {
      $this->computeValue();
      $this->valueComputed = TRUE;
    }
  }

  /**
   * {@inheritdoc}
   */
  protected function computeValue() {
    /** @var \Drupal\image\Plugin\Field\FieldType\ImageItem $image_item */
    $image_item = $this->getParent();

    /** @var \Drupal\file\FileInterface $file */
    $file = $image_item->entity;
    $width = $image_item->width;
    $height = $image_item->height;
    if (!$file) {
      return;
    }

    $image_style_storage = \Drupal::entityTypeManager()->getStorage('image_style');
    $typed_data_manager = $this->getTypedDataManager();

    if ($this->definition instanceof CacheableDependencyInterface) {
      $this->addCacheableDependency($this->definition);
    }
    $image_style_ids = array_keys($this->definition->getPropertyDefinitions());
    /** @var \Drupal\image\ImageStyleInterface $style */
    foreach ($image_style_storage->loadMultiple($image_style_ids) as $style) {
      $this->addCacheableDependency($style);
      $value = $this->computeImageStyleMetadata($file, $width, $height, $style);
      if ($value) {
        $this->values[$style->getName()] = $typed_data_manager
          ->getPropertyInstance($this, $style->getName(), $value);
      }
    }
  }

  /**
   * @param \Drupal\file\FileInterface $file
   * @param $width
   * @param $height
   * @param \Drupal\image\ImageStyleInterface $style
   * @return array|bool
   *
   * @todo rather than returning an array, return a value object that
   *   implements CacheableDependencyInterface
   *
   * @see \Drupal\image\Entity\ImageStyle::buildUrl
   * -> tag: config:image.settings
   *
   * -> tag: $style->getCacheTags()
   */
  protected function computeImageStyleMetadata(FileInterface $file, $width, $height, ImageStyleInterface $style) {
    $file_uri = $file->getFileUri();

    if (!$style->supportsUri($file_uri)) {
      return NULL;
    }

    $dimensions = [
      'width' => $width,
      'height' => $height,
    ];
    $style->transformDimensions($dimensions, $file_uri);

    return [
      'url' => file_url_transform_relative($style->buildUrl($file_uri)),
      // Cast this to strings as the data definition will cast them back to
      // typed values. This makes this value behave as if they came from the
      // database where all values are strings.
      'width' => (string) $dimensions['width'],
      'height' => (string) $dimensions['height'],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function setValue($values, $notify = TRUE) {
    parent::setValue($values, $notify);

    if (isset($values)) {
      $this->valueComputed = TRUE;
    }
  }

  /**
   * {@inheritdoc}
   */
  public function get($index) {
    $this->ensureComputedValue();
    return isset($this->values[$index]) ? $this->values[$index] : NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function getString() {
    $this->ensureComputedValue();
    return parent::getString();
  }

  /**
   * {@inheritdoc}
   */
  public function getProperties($include_computed = FALSE) {
    return array_filter(parent::getProperties($include_computed));
  }

  /**
   * {@inheritdoc}
   */
  public function isEmpty() {
    $this->ensureComputedValue();
    return parent::isEmpty();
  }

  /**
   * {@inheritdoc}
   */
  public function getIterator() {
    $this->ensureComputedValue();
    return parent::getIterator();
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheTags() {
    $this->ensureComputedValue();
    return $this->cacheTags;
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheContexts() {
    $this->ensureComputedValue();
    return $this->cacheContexts;
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheMaxAge() {
    $this->ensureComputedValue();
    return $this->cacheMaxAge;
  }

}
