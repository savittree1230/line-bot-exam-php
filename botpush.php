<?php



require "vendor/autoload.php";

$access_token = 'yYYYSmn3JIvFBNF8XFeS47wlg9El0fNMD7Rrb2qNFMfhxJGoLI6OGmymTvmMZFAbyYIbmd9AedTq1sWEGUh6sKBmh5XQTWqJ600PyQgIcrL08ftqV7YZMW81QlnUJnuT17bEi3oRNbal9mHCUgp/pgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'fb55a67e128ba22a048098078fb0da56';

$pushID = 'U7d291e47d415b7101f0f86d4597c9376';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('สวัสดีค่ะคุณดลธรรม กรุณาชำระเงินด้วยค่ะ ^^');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







