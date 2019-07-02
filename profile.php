<?php


$access_token = 'bufyDcWA0z69cIjhXW7dUUg2/SCr6IDYIBGLxIoWvLSf15+G+iUYOxd1bnDBSwBgDpU+NdXKnGCVGTZcR3QHK18zeX2655ya7zXPdfrwoig3mPNxA5Raq7ZyvvOlObUyJa3/T10/c1su0g56JcBFxQdB04t89/1O/w1cDnyilFU=';

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

