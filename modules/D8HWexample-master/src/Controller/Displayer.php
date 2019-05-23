<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\TypedData\Plugin\DataType\StringData;
use Drupal\search_api\Plugin\DataType\Html;

function display($type, $results )
{

    if ($type === "experience") {
        foreach ($results as $key => $value) {
            set_drupal_message(($value['ville'] . '<br>' . $value['latitude'] . '<br>' . html_entity_decode($value['body'])));

            // etc
        }
    }

}



