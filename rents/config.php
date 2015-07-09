<?php
// Retrieved FormData
$rid = '';
$payment_data = array('client_name'=>'', 'client_email'=>'', 'client_legal_id'=>'', 'card_brand'=>'', 'transaction_amount'=>'');
if($_POST) $payment_data = $_POST['payment'];
if($_GET) $rid =  $_GET['rid'];

// Constants
$localhost = array(
    '127.0.0.1',
    '::1'
);

// URL REST Service
$local_rents   = 'http://localhost:7000';
$remote_rents  = 'https://rents-app.herokuapp.com';
$rents_checkout_path = 'api/v1/transactions/page';
$rents_check_payment_path = "api/v1/transactions/$rid";

// URLs Local (dev/test) & remote
$local_landing = 'http://localhost:8000';
$remote_landing = 'http://edu.rents.com.br';
$landing_checkout_path = 'checkout-backup.php';

// Build the URLs (redirect_link & Rent$)
if(in_array($_SERVER['REMOTE_ADDR'], $localhost)) {
    // Localhost URLs
    $rents_domain   = $local_rents;
    $landing_domain = $local_landing;

    // Localhost credentials
    $app_id = '4';
    $secret_key = '$2a$10$vhjAZi1lyXB5xQRAvGl2pesxIWEU/yhhDQlaTAROykvgvag4SsQeK';
}else {
    // Localhost URLs
    $rents_domain   = $remote_rents;
    $landing_domain = $remote_landing;

    // Localhost credentials
    $app_id = '31';
    $secret_key = '$2a$10$VT7VMzto1GtVQa6BrCZ5TOKDAeIj09mZ0z/PZmVc7DrdVJjlJux1i';
}

$rents_checkout_url = "$rents_domain/$rents_checkout_path";
$rents_check_payment_url = "$rents_domain/$rents_check_payment_path";
$landing_redirect_link_url = "$landing_domain/$landing_checkout_path";