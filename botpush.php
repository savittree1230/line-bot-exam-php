<?php



require "vendor/autoload.php";

$access_token = 'yYYYSmn3JIvFBNF8XFeS47wlg9El0fNMD7Rrb2qNFMfhxJGoLI6OGmymTvmMZFAbyYIbmd9AedTq1sWEGUh6sKBmh5XQTWqJ600PyQgIcrL08ftqV7YZMW81QlnUJnuT17bEi3oRNbal9mHCUgp/pgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'fb55a67e128ba22a048098078fb0da56';

$pushID = 'Uc775949b49f07d613d19ce6dd209bddc';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("แจ้งเตือนการลาชื่อ \n ชื่อ: นางสาวสาวิตรี ฟักพูล");

$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







