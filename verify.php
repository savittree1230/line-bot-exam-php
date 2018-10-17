<?php
$access_token = 'yYYYSmn3JIvFBNF8XFeS47wlg9El0fNMD7Rrb2qNFMfhxJGoLI6OGmymTvmMZFAbyYIbmd9AedTq1sWEGUh6sKBmh5XQTWqJ600PyQgIcrL08ftqV7YZMW81QlnUJnuT17bEi3oRNbal9mHCUgp/pgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
