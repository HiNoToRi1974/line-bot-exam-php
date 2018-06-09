<?php



require "vendor/autoload.php";

$access_token = 'iKyA9jG1YL22WoULZhMz+VGyXRNOrHc7V1/dnyVsbzoEKZ3NG5sGPMm0h/qhOOX48QtZfKfte1dCIeoHniTb8NW86LeQ4HmP0/MHaUmUq5cb7Hchf6CadFOyzyA8tFqVqJHNyBaiogY6jRW2pfNq3QdB04t89/1O/w1cDnyilFU=';

$channelSecret = '5fd5241068bd48a9d3abf20fb9969cea';

$pushID = 'Ueb44fcfd35d0419d578b623ed1be1683';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







