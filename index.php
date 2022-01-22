<?php
//Add your API Key and Secret to the empty string
$apiKey = "";
$secret = "";

$domain = $_GET['domain'];
$apiURL = "https://api.ote-godaddy.com/v1/domains/available?domain={$domain}";
$headers = array(
    'Accept: application/json',
    "Authorization: sso-key {$apiKey}:{$secret}",
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$server_output = curl_exec ($ch);
curl_close ($ch);

//$data = json_decode($server_output);
echo $server_output;