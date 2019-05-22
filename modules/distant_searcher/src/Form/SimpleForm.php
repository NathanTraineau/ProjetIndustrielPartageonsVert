<?php

namespace Drupal\Recherche\Form;

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
      //CallAPI(POST,http://localhost/PseudoAPI/getDataAPI/Communication, )
      echo t($form_state);
      $response = file_get_contents('http://localhost/PseudoAPI/getDataAPI/CommunicationAjax?q=t($form_state)');
      // $response = json_decode($response);
      echo $response  ;
  }

  /**
  function CallAPI($method, $url, $data = false)
{
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }
*/
}



