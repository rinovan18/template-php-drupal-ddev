<?php

namespace Drupal\Tests\metatag\Functional;

use Drupal\Core\Cache\Cache;
use Drupal\entity_test\Entity\EntityTest;
use Drupal\Tests\entity_test\Functional\Rest\EntityTestResourceTestBase;
use Drupal\Tests\rest\Functional\AnonResourceTestTrait;

/**
 * Verify that the JSON output from JsonApi works as intended.
 *
 * @group metatag
 */
class EntityTestMetatagTest extends EntityTestResourceTestBase {

  use AnonResourceTestTrait;

    /**
   * {@inheritdoc}
   */
  public static $modules = ['metatag'];

  /**
   * {@inheritdoc}
   */
  protected function createEntity() {
    $entity_test = EntityTest::create([
      'name' => 'Some Cool Content',
      'type' => static::$entityTypeId,
      'metatag' => [
        'value' => [
          'title' => 'Some Cool Content',
          'canonical_url' => '',
          'description' => 'This is a description for use in Search Engines',
          'keywords' => 'drupal8, testing, jsonapi, metatag'
        ]
      ],
    ]);
    $entity_test->setOwnerId(0);
    $entity_test->save();

    return $entity_test;
  }

  /**
   * {@inheritdoc}
   */
  protected function getExpectedNormalizedEntity() {
    return parent::getExpectedNormalizedEntity() + [
        'metatag_normalized' => [
          [
            'tag' => 'meta',
            'attributes' => [
              'name' => 'title',
              'content' => 'Some Cool Content',
            ],
          ],
          [
            'tag' => 'link',
            'attributes' => [
              'rel' => 'canonical',
              'href' => '',
            ],
          ],
          [
            'tag' => 'meta',
            'attributes' => [
              'name' => 'description',
              'content' => 'This is a description for use in Search Engines',
            ],
          ],
          [
            'tag' => 'meta',
            'attributes' => [
              'name' => 'keywords',
              'content' => 'drupal8, testing, jsonapi, metatag',
            ],
          ],
        ],
      ];
  }

  /**
   * {@inheritdoc}
   */
  protected function getExpectedCacheContexts() {
    return Cache::mergeContexts(parent::getExpectedCacheContexts(), ['url.path']);
  }

  /**
   * {@inheritdoc}
   */
  protected function getExpectedCacheTags() {
    return Cache::mergeTags(parent::getExpectedCacheTags(), ['config:system.site']);
  }

}
