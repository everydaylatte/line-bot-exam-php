<?php



require "vendor/autoload.php";

$access_token = 'Ou/PR4gQF8HODIhktVr42Cvy1a/HhvPVEMyzw+E6k0yHrk5rbtWBL4gZlpwLA30WgWkZSa9zQ3A6m1CCLN7MkXZy6QxoKQqGM+aY8SqKVUWCNhIt9xygxM2FnZq4iIPgnyrcDgSwzZEiTj+m/mcAEAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '15f68f43b89a0b4f026005fc5ff3e81a';

$pushID = 'Ue92a4b648ab700533c529a7dcb7d3317';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







