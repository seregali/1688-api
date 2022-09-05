<?php

use Laonet1688Api\SendRequest;

include_once __DIR__ . '/bootstrap.php';

$client = new SendRequest($apiClient->getAccessToken());

$response = $client->send([
    'api_name'=>'item_get',
    'num_iid'=>'669057592535'
]);

//669057592535
$responseData = json_decode($response->getBody(), true);

if ($responseData['item']) {
    var_dump($responseData['item']['shop_id']);
}

if ($responseData['error']) {
    var_dump($responseData['error']);
}
