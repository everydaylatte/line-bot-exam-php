<?php


$access_token = 'Ou/PR4gQF8HODIhktVr42Cvy1a/HhvPVEMyzw+E6k0yHrk5rbtWBL4gZlpwLA30WgWkZSa9zQ3A6m1CCLN7MkXZy6QxoKQqGM+aY8SqKVUWCNhIt9xygxM2FnZq4iIPgnyrcDgSwzZEiTj+m/mcAEAdB04t89/1O/w1cDnyilFU=';

$userId = 'Ue92a4b648ab700533c529a7dcb7d3317';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

