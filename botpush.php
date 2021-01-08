<?php



require "vendor/autoload.php";

$access_token = 'EbAjdAGvg33yw5lccqD+GAwHxsznE+iIsbZqjjXufQsyv45PH9AlT1GPJW3KlhB+s4Oll8P5FXgb5UeTgqLFqYlMv6vczGTA9lNSP6NjoTBApk+lqcDX5Vqee/6IRnNLkuY7mwFsTY1iG9DjR9+LKwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '85346ca249a954f91fb8a35db898efbd';

$pushID = 'U297550fa03f223e23724f3a0b70f582b';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$msg = echo "test \n3 \nbuntud
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($msg);
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
