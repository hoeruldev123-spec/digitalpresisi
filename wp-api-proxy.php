<?php
// wp-api-proxy.php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$api_url = 'https://digitalpresisi.com/blog/wp-json/wp/v2/posts?per_page=3&_embed';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
