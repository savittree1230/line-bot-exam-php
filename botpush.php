<?php



require "vendor/autoload.php";

$access_token = 'yYYYSmn3JIvFBNF8XFeS47wlg9El0fNMD7Rrb2qNFMfhxJGoLI6OGmymTvmMZFAbyYIbmd9AedTq1sWEGUh6sKBmh5XQTWqJ600PyQgIcrL08ftqV7YZMW81QlnUJnuT17bEi3oRNbal9mHCUgp/pgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'fb55a67e128ba22a048098078fb0da56';

$pushID = 'Ub0bf912280506b75a9a25e3a449525ca';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("** กรุณาตรวจสอบการแจ้งลา **\nชื่อ: นางสาวสาวิตรี ฟักพูล\nประเภทการลา : ลาพักร้อน 1 วัน\nเริ่มลา 17 ตุลาคม 2561\nสิ้นสุด : 17 ตุลาคม 2561");

$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







