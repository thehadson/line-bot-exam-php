<?php


$access_token = '7shsjp6O0p03KAvZ7ScuVBwkZ+QpzUsxlyiD30RmOqUNX1kqIOuWMk0f40861p8xDpU+NdXKnGCVGTZcR3QHK18zeX2655ya7zXPdfrwoigJkbGQx/6K6YLhPuQWLfHXBekXx2vMdJmvBkDF+4z7dAdB04t89/1O/w1cDnyilFU=';

$userId = 'Ud5dfc996a41aa4034501f44069e4e9c6';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

