<?php
// all stuff will be autoloaded here.
// in future, we will autoload all stuff with Composer and include vendor/autoload.php instead of this file

define('BASE_DIR', __DIR__);
define('ENV', 'dev');

require_once __DIR__.'/functions.php';
require_once __DIR__.'/controllers.php';
require_once __DIR__.'/app.php';