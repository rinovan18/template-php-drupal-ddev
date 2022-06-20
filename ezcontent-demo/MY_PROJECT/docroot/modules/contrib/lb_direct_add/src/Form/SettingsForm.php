<?php

namespace Drupal\lb_direct_add\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class that configures forms module settings.
 */
class SettingsForm extends ConfigFormBase {

  /**
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'lb_direct_add.settings';

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      static::SETTINGS,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'lb_direct_add_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(static::SETTINGS);
    $form['add_label_to_list'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Add label to list'),
      '#description' => $this->t('Check this if you want to add label at the top of paragraph listing.'),
      '#default_value' => $config->get('add_label_to_list'),
    ];
    $form['label_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label name'),
      '#description' => $this->t('Enter label name, Default is Add Block.'),
      '#default_value' => $config->get('label_name') ? $config->get('label_name') : 'Add Blocks',
      '#states' => [
        'visible' => [':input[name="add_label_to_list"]' => ['checked' => TRUE]],
      ],
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);
    $config = $this->config(static::SETTINGS);
    foreach ($form_state->cleanValues()->getValues() as $key => $value) {
      $config->set($key, $value);
    }
    $config->save();
  }

}
