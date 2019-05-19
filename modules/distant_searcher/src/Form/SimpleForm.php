<?php

namespace Drupal\distant_searcher\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

//include 'AjaxComm.php';

/**
 * Our simple form class.
 */



class SimpleForm extends FormBase {

      public function getFormId() {
        return 'drupalup_simple_form';
      }

      /**
       * {@inheritdoc}
       */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['search'] = [
      '#type' => 'textfield',
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Rechercher'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
        //showCD($form_state);
  }

}



