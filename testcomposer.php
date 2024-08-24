<?php
require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
$date= date( format: 'Y-m-d');
$url = 'https://google.com';
$client = new Client();
try {
    $response = $client->request( 'GET', $url);

    $response = $client->request( 'GET', $url);

    $httpCode = $response->getStatusCode();
    $body= $response->getBody()->getContents();
    echo $httpCode;
    if ($httpCode == 200) {
        $message = "OK";
    } else {
        $message = "He ok";
    }
} catch (RequestException $e) {
    
$message = "Произошла ошибка при попытке доступа к $url. Система может быть недоступна.";
}
echo $message;
