<?php

namespace Drupal\hello_world\Controller;

include 'Displayer.php';

function requester($data)
{

    $response = file_get_contents('http://localhost/PseudoAPI/getDataAPI/CommunicationAjax?q=' . t($data));
    $parsed_json = json_decode($response, true);
    $parsed_json = $parsed_json['records'];
    display('experience', $parsed_json );
//pr($parsed_json);

}