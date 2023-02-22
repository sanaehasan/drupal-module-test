<?php

namespace Drupal\fun_time\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class FunConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'fun_time_config_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['fun_time.settings'];
  }

  /**
   * {@inheritdoc}
   * create the form
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('fun_time.settings');

    $form['title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Title'),
      '#default_value' => $config->get('title'),
      '#description' => $this->t('Enter the title for your module.'),
    ];

    $form['admin_description'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Admin Description'),
      '#default_value' => $config->get('admin_description'),
      '#description' => $this->t('Enter a description for the module that will be displayed on the admin page.'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   * return form to the view
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->configFactory->getEditable('fun_time.settings');

    $config->set('title', $form_state->getValue('title'));
    $config->set('admin_description', $form_state->getValue('admin_description'));

    $config->save();

    parent::submitForm($form, $form_state);
  }

  

}