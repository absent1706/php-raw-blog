<?php

function view($view_path, $variables = array()) {
    extract($variables);

    ob_start();
    require_once BASE_DIR.'/views/'.$view_path.'.view.php';
    $html = ob_get_clean();

    return $html;
}