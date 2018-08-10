<?php

//First see setup.php  and set publicKey & privateKey

require_once dirname(__FILE__) . '/setup.php';
// CREATE THE ENDPOINT
$endpoint = new AvangEmailApi_Endpoint_ListSubscribers();

/*===================================================================================*/

// ADD SUBSCRIBER
$response = $endpoint->create('LIST-UNIQUE-ID', array(
    'EMAIL'    => 'john.napi@example.com',
    'FNAME'    => 'John',
    'LNAME'    => 'Napi'
));

// DISPLAY RESPONSE, You can comment bellow
echo '<hr /><pre>';
print_r($response->body);
echo '</pre>';


/*===================================================================================*/