<?php
// all stuff will be autoloaded here.
// in future, we will autoload all stuff with Composer and include vendor/autoload.php instead of this file

define('BASE_DIR', __DIR__);
// TODO: take ENV from OS environment var
define('ENV', 'dev');

if (ENV == 'dev') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

function exception_error_handler($errno, $errstr, $errfile, $errline ) {
    throw new Exception("PHP error: $errstr");
}
set_error_handler("exception_error_handler");

require_once __DIR__.'/functions.php';
require_once __DIR__.'/controllers.php';
require_once __DIR__.'/app.php';