<?php


$access_token = 'EbAjdAGvg33yw5lccqD+GAwHxsznE+iIsbZqjjXufQsyv45PH9AlT1GPJW3KlhB+s4Oll8P5FXgb5UeTgqLFqYlMv6vczGTA9lNSP6NjoTBApk+lqcDX5Vqee/6IRnNLkuY7mwFsTY1iG9DjR9+LKwdB04t89/1O/w1cDnyilFU=';

$userId = 'U297550fa03f223e23724f3a0b70f582b';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

