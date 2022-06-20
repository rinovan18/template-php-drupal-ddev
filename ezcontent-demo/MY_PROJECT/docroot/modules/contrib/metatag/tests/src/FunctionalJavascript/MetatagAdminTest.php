<?php

namespace Drupal\Tests\metatag\FunctionalJavascript;

use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\FunctionalJavascriptTests\WebDriverTestBase;
use Drupal\Tests\metatag\Functional\MetatagHelperTrait;

/**
 * Tests the Metatag administration.
 *
 * @group metatag
 */
class MetatagAdminTest extends WebDriverTestBase {

  use MetatagHelperTrait;
  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'node',
    'field_ui',
    'test_page_test',
    'token',
    'metatag',

    // @see testAvailableConfigEntities
    'block',
    'block_content',
    'comment',
    'contact',
    'menu_link_content',
    'menu_ui',
    'shortcut',
    'taxonomy',
    'entity_test',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    // Use the test page as the front page.
    $this->config('system.site')->set('page.front', '/test-page')->save();

    // Create Basic page and Article node types.
    if ($this->profile != 'standard') {
      $this->drupalCreateContentType([
        'type' => 'page',
        'name' => 'Basic page',
        'display_submitted' => FALSE,
      ]);
      $this->drupalCreateContentType(['type' => 'article', 'name' => 'Article']);
    }
  }

  /**
   * Test that the entity default values load on the entity form.
   *
   * And that they can then be overridden correctly.
   */
  public function testEntityDefaultInheritence() {
    $assert_session = $this->assertSession();

    // Initiate session with a user who can manage meta tags and content type
    // fields.
    $permissions = [
      'administer site configuration',
      'administer meta tags',
      'access content',
      'administer node fields',
      'create article content',
      'administer nodes',
      'create article content',
      'create page content',
    ];
    $account = $this->drupalCreateUser($permissions);
    $this->drupalLogin($account);

    // Add a Metatag field to the Article content type.
    $this->fieldUIAddNewField('admin/structure/types/manage/article', 'meta_tags', 'Meta tags', 'metatag');

    // Try creating an article, confirm the fields are present. This should be
    // the node default values that are shown.
    $this->drupalGet('node/add/article');

    $this->clickLink('Meta tags');
    $this->click('#edit-field-meta-tags-basic');
    $assert_session->assertWaitOnAjaxRequest();
    $assert_session->fieldValueEquals('field_meta_tags[0][basic][title]', '[node:title] | [site:name]');
    $assert_session->fieldValueEquals('field_meta_tags[0][basic][description]', '[node:summary]');

    // Customize the Article content type defaults.
    $this->drupalGet('admin/config/search/metatag/add');
    $values = [
      'title' => 'Article title override',
      'description' => 'Article description override',
    ];
    $this->getSession()->getPage()->selectFieldOption('id', 'node__article');
    $assert_session->assertWaitOnAjaxRequest();
    $this->assertSession()->elementExists('xpath', '//*[@data-drupal-selector="edit-basic"]')->press();
    $this->drupalPostForm(NULL, $values, 'Save');
    $assert_session->pageTextContains(strip_tags(t('Created the %label Metatag defaults.', ['%label' => 'Content: Article'])));

    // Try creating an article, this time with the overridden defaults.
    $this->drupalGet('node/add/article');

    $this->clickLink('Meta tags');
    $this->click('#edit-field-meta-tags-basic');
    $assert_session->assertWaitOnAjaxRequest();
    $assert_session->fieldValueEquals('field_meta_tags[0][basic][title]', 'Article title override');
    $assert_session->fieldValueEquals('field_meta_tags[0][basic][description]', 'Article description override');
  }

  /**
   * Creates a new field through the Field UI.
   *
   * @param string $bundle_path
   *   Admin path of the bundle that the new field is to be attached to.
   * @param string $field_name
   *   The field name of the new field storage.
   * @param string $label
   *   (optional) The label of the new field. Defaults to a random string.
   * @param string $field_type
   *   (optional) The field type of the new field storage. Defaults to
   *   'test_field'.
   */
  public function fieldUIAddNewField($bundle_path, $field_name, $label = NULL, $field_type = 'test_field') {
    $label = $label ?: $field_name;

    // Allow the caller to set a NULL path in case they navigated to the right
    // page before calling this method.
    if ($bundle_path !== NULL) {
      $bundle_path = "$bundle_path/fields/add-field";
    }

    // First step: 'Add field' page.
    $this->drupalGet($bundle_path);

    $session = $this->getSession();

    $page = $session->getPage();
    $assert_session = $this->assertSession();

    $field_new_storage_type = $page->findField('new_storage_type');
    $field_new_storage_type->setValue($field_type);
    $assert_session->assertWaitOnAjaxRequest();

    $field_label = $page->findField('label');
    $this->assertTrue($field_label->isVisible());
    $field_label->setValue($label);
    $machine_name = $assert_session->waitForElementVisible('css', '[name="label"] + * .machine-name-value');
    $this->assertNotEmpty($machine_name);
    $page->findButton('Edit')->press();

    $field_field_name = $page->findField('field_name');
    $this->assertTrue($field_field_name->isVisible());
    $field_field_name->setValue($field_name);
    $assert_session->assertWaitOnAjaxRequest();

    $page->findButton(t('Save and continue'))->click();

    $assert_session->responseContains($this->t('These settings apply to the %label field everywhere it is used.', ['%label' => $label]));

    // Second step: 'Storage settings' form.
    $page->findButton('Save field settings')->click();
    $assert_session->responseContains($this->t('Updated field %label field settings.', ['%label' => $label]));

    // Third step: 'Field settings' form.
    $page->findButton('Save settings')->click();
    $assert_session->responseContains($this->t('Saved %label configuration.', ['%label' => $label]));
  }

}
