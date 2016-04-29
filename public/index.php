<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__.'/../autoload.php';
// require __DIR__.'/../database/init.php';

$response = App\run();

http_response_code($response['code']);
echo $response['body'];