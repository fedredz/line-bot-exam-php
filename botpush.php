<?php



require "vendor/autoload.php";

$access_token = 'EbAjdAGvg33yw5lccqD+GAwHxsznE+iIsbZqjjXufQsyv45PH9AlT1GPJW3KlhB+s4Oll8P5FXgb5UeTgqLFqYlMv6vczGTA9lNSP6NjoTBApk+lqcDX5Vqee/6IRnNLkuY7mwFsTY1iG9DjR9+LKwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '85346ca249a954f91fb8a35db898efbd';

$pushID = 'U297550fa03f223e23724f3a0b70f582b';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$msg = "สวัสดีจ้า";
//$originalimage_url= "https://sv1.picz.in.th/images/2021/01/08/lTo3oa.jpg";
//$previewimage_url= "https://sv1.picz.in.th/images/2021/01/08/lTo3oa.th.jpg";
$originalimage_url="http://10.0.1.191/static/upload/event/2021-01-13/v2_c670a674c019c3a4c4cf3e6e752434353828561a.jpg";
$previewimage_url=$originalimage_url;
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($msg);
$imageBuilder = new \LINE\LINEBot\MessageBuilder\ImageMessageBuilder($originalimage_url, $previewimage_url);
$multiMessageBuilder = new \LINE\LINEBot\MessageBuilder\MultiMessageBuilder();
$multiMessageBuilder->add($textMessageBuilder);
$multiMessageBuilder->add($imageBuilder);

$response = $bot->pushMessage($pushID, $multiMessageBuilder);
//$response = $bot->pushMessage($pushID, $textMessageBuilder);
//$response = $bot->pushMessage($pushID, $imageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
