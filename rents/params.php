<?php
// Client params to send to Rent$
$clients = array(
    'name'     => $payment_data['client_name'],
    'email'    => $payment_data['client_email'],
    'legal_id' => $payment_data['client_legal_id']
);

// Card params to send to Rent$
$card_params = array('brand'=>$payment_data['card_brand']);

// Amount params to send to Rent$
$plains = array(150000, 100000, 75000);
$plains_names = array('gold', 'silver', 'cooper');
$plains_description = array('top plain', 'medium plain', 'basic plain');
$amount = $plains[$payment_data['transaction_amount']];

$sold_items = array(
    'remote_id'   => $payment_data['transaction_amount'],
    'name'        => $plains_names[$payment_data['transaction_amount']],
    'description' => $plains_description[$payment_data['transaction_amount']]
);

$credentials = array(
    'app_id' => $app_id,
    'secret_key' => $secret_key
);

// Create the request params
$request_params = array();
$request_params['auth'] = $credentials;
$request_params['transaction'] = array(
    'amount'        => $amount,
    'clients'       => $clients,
    'sold_items'    => $sold_items,
    'auth'          => $credentials,
    'card'          => $card_params,
    'redirect_link' => $landing_redirect_link_url
);