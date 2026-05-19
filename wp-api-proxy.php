<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$api_url = 'https://digitalpresisi.com/blog/index.php?rest_route=/wp/v2/posts&per_page=3&_embed';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo json_encode([
        'error' => curl_error($ch)
    ]);
    exit;
}

curl_close($ch);

echo $response;
