<?php

namespace App;

function run() {

    define('BASE_DIR', __DIR__);

    // TODO NEXT VERSIONS: use Slim for routing

    // TODO: - incapsulate this stuff to a class
    //       - not echo output but return it to index.php;

    // TODO: URL aliases and url_for method
    $routes = [
        // TODO NEXT VERSIONS: use url aliases so not hardcode URLs in templates but write like <a href = "url_for('posts:new')>"
        // TODO NEXT VERSIONS: use Slim for routing

        // TODO: move methods to classes and write like
        //       => ['class' => '\App\HomeController',  'method' => 'home'],

        '/'          => 'posts_index',

        '/posts/new' => 'posts_new',
        // TODO NEXT VERSIONS: handle ULRs with params like '/posts/<id>/edit'
    ];

    // TODO:
    //   - incapsulate routing code to a function
    //   - this function should not echo and die (it's a mess!!), but return HTTP code and HTTP response body to

    // TODO NEXT VERSIONS: make an exception system:
    //   - catch PHP's fatal errors (which can arise when executing controller ) and render beatufil page instead of PHP's ugly output
    //   - make our own errors system.
    //     It's needed 'cause errors have types: incorrect user input and internal errors and
    //        we should handle them in different ways:
    //          - for user errors we show full messages
    //          - for internal errors we show some standard message like 'Sorry, some error occured. Try again later'

    foreach($routes as $url_template => $controller) {
        if ($url_template == $_SERVER["REQUEST_URI"]) {
            $method = 'Controllers\\'.$controller;
            $response = $method();
            if (!is_array($response)) {
                $response = ['code' => 200, 'body' => $response];
            }
            return $response;
        }
    }

    // TODO:
    //   - return 404 HTTP code render
    //   - custom 404 page
    return ['code' => 404, 'body' => '404 Not Found'];
}