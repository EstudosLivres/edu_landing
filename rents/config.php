<?php
// Retrieve the FormData
$payment_data = $_POST['payment'];

// Constants
$localhost = array(
    '127.0.0.1',
    '::1'
);

// My Config
$app_id = '4';
$secret_key = '$2a$10$SCKKhtcyFW1zCvbTwaYNfeMDXPTnph5DEXlXpq.Ci27IKzDBDlXtS';

// URL REST Service
$local_rents   = 'http://localhost:7000';
$remote_rents  = 'https://rents-app.herokuapp.com';
$rents_checkout_path = 'api/v1/transactions/page';

// URLs Local (dev/test) & remote
$local_landing = 'http://localhost:8000';
$remote_landing = 'http://deu.rents.com.br';
$landing_checkout_path = 'checkout.php';

// Build the URLs (redirect_link & Rent$)
if(in_array($_SERVER['REMOTE_ADDR'], $localhost)) {
    $rents_domain   = $local_rents;
    $landing_domain = $local_landing;
}else {
    $rents_domain   = $remote_rents;
    $landing_domain = $remote_landing;
}

$rents_checkout_url = "$rents_domain/$rents_checkout_path";
$landing_redirect_link_url = "$landing_domain/$landing_checkout_path";