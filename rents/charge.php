<?php
// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($request_params),
    ),
);

// Perform the request
$context  = stream_context_create($options);
$response = json_decode(file_get_contents($rents_checkout_url, false, $context));

if($response->error != null) die($response->error);
else header('Location: '.$response->purchase_url);
die;
