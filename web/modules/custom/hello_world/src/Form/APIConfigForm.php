<?php

namespace Drupal\hello_world\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure hello_world settings for this site.
 */
class APIConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'hello_world_a_p_i_config';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['hello_world.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['dev_api_url'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Dev API URL'),
      '#default_value' => $this->config('hello_world.settings')->get('dev_api_url'),
    ];

    $form['prod_api_url'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Prod API URL'),
      '#default_value' => $this->config('hello_world.settings')->get('prod_api_url'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('hello_world.settings')
      ->set('dev_api_url', $form_state->getValue('dev_api_url'))
      ->set('prod_api_url', $form_state->getValue('prod_api_url'))
      ->save();
    parent::submitForm($form, $form_state);
  }
}