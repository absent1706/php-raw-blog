<?php

function view($view_path, $variables = array()) {
    extract($variables);

    $views_dir = BASE_DIR.'/views/';

    ob_start();
    require_once $views_dir.'layouts/header.view.php';
    require_once $views_dir.$view_path.'.view.php';
    require_once $views_dir.'layouts/footer.view.php';
    $html = ob_get_clean();

    return $html;
}

// TODO: incapsulate $db somewhere to make it invisible in global scope
$db = null;
function db() {
    global $db;
    if (!$db) {
        $db = new PDO('sqlite:'.BASE_DIR.'/db.sqlite');
    }
    return $db;
}