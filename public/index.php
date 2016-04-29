<?php

require_once __DIR__.'/../autoload.php';
// require __DIR__.'/../database/init.php';

$response = App\run();

http_response_code($response['code']);
echo $response['body'];