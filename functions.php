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