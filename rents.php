<?php
// Constants
$localhost = array(
    '127.0.0.1',
    '::1'
);

// My Config
$app_id = '';
$secret_key = '';

// URL REST Service
$local_rents   = 'http://localhost:7000';
$remote_rents  = 'https://rents-app.herokuapp.com';
$checkout_path = '/api/v1/transactions/page';

// Create the request params
//{"transaction"=>{"card"=>{"brand"=>"elo"}, "clients"=>{"name"=>"Preston Mills DVM", "email"=>"nestor_quigley@gmail.com", "legal_id"=>"91842484834"}, "amount"=>"338550", "redirect_link"=>"http://localhost:7000/api/redirect_receiver", "test_env"=>"true", "debug"=>"true", "sold_items"=>{"0"=>{"remote_id"=>"1", "name"=>"Intelligent Concrete Table", "description"=>"Movies & Outdoors"}, "1"=>{"remote_id"=>"43", "name"=>"Intelligent Rubber Hat", "description"=>"Music"}, "2"=>{"remote_id"=>"800", "name"=>"Awesome Wooden Computer", "description"=>"Books, Garden & Toys"}}}, }
$credentials = array(
    'auth'=> array(
        'app' => $app_id,
        'secret_key' => $secret_key
    )
);

in_array($_SERVER['REMOTE_ADDR'], $localhost) ? $domain = $local_rents  : $domain = $remote_rents;

//$domain
//$rents_page_url =
//echo $_SERVER['REMOTE_ADDR'];