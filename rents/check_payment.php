<?php
require_once 'config.php';
require_once 'params.php';

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'GET',
        'content' => http_build_query($request_params),
    ),
);

// Perform the request
$context  = stream_context_create($options);
$response = json_decode(file_get_contents($rents_check_payment_url, false, $context));

// Clients as Client
$response->client = $response->clients{0};

// SetUp purchase date
date_default_timezone_set('America/Sao_Paulo');
$bought_at = date_create($response->sold_items[0]->created_at);
$bought_at = date_format($bought_at, 'd M Y - H:i:s');

// SetUp currency amount
setlocale(LC_MONETARY, 'pt_BR', 'ptb');
$amount_formatted = number_format($response->amount, 2, ',', '.');

// SoldItems as SoldItem
$sold_item = $response->sold_items[0];
