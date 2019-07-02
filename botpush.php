<?php



require "vendor/autoload.php";

$access_token = 'bufyDcWA0z69cIjhXW7dUUg2/SCr6IDYIBGLxIoWvLSf15+G+iUYOxd1bnDBSwBgDpU+NdXKnGCVGTZcR3QHK18zeX2655ya7zXPdfrwoig3mPNxA5Raq7ZyvvOlObUyJa3/T10/c1su0g56JcBFxQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '5eea22447ca8186cae7c95f6d08e81c6';

$pushID = 'Ud5dfc996a41aa4034501f44069e4e9c6';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







