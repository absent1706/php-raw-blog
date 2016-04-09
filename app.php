<?php

/* APP INIT AREA. BEGIN */
    define('BASE_DIR', __DIR__);

    // TODO NEXT VERSIONS: use Composer and write
    //   require __DIR__.'/vendor/autoload.php';
    require __DIR__.'/autoload.php';

    // TODO NEXT VERSIONS: use Slim for routing

    // TODO: - incapsulate this stuff to a class
    //       - not echo output but return it to index.php;

    // TODO: URL aliases and url_for method
    $routes = [
        // TODO NEXT VERSIONS: use url aliases so not hardcode URLs in templates but write like <a href = "url_for('posts:new')>"
        // TODO NEXT VERSIONS: use Slim for routing

        // TODO: move methods to classes and write like
        //       => ['class' => '\App\HomeController',  'method' => 'home'],

        '/'          => 'home',

        '/posts/new' => 'posts_new',
        '/posts'     => 'posts_index',
        // TODO NEXT VERSIONS: handle ULRs with params like '/posts/<id>/edit'

        '/users'     => 'users_index',
    ];

    // TODO:
    //   - incapsulate routing code to a function
    //   - this function should not echo and die (it's a mess!!), but return HTTP code and HTTP response body to

    // TODO NEXT VERSIONS: make an exception system:
    //   - catch PHP's fatal errors (which can arise when executing handler ) and render beatufil page instead of PHP's ugly output
    //   - make our own errors system.
    //     It's needed 'cause errors have types: incorrect user input and internal errors and
    //        we should handle them in different ways:
    //          - for user errors we show full messages
    //          - for internal errors we show some standard message like 'Sorry, some error occured. Try again later'

    /* routing code. begin */
        foreach($routes as $url_template => $handler) {
            if ($url_template == $_SERVER["REQUEST_URI"]) {
                $output = $handler();
                echo $output; die();
            }
        }
        // TODO:
        //   - return 404 HTTP code render
        //   - custom 404 page
        echo '404 Not Found'; die();
    /* routing code. end */

/* APP INIT AREA. END */

/* CONTROLLERS AREA. BEGIN */
    // TODO NEXT VERSIONS: this area should be moved to separate place

    // TODO NEXT COMMIT: take HTML from HTML files
    function home() {
        return '
            <html>
            <head>
                <link rel="stylesheet" type="text/css" href="/css/main.css">
            </head>
            <body>
                home page
            </body>
            </html>';
    }

    function posts_index() {
        return '
            <html>
            <head>
                <link rel="stylesheet" type="text/css" href="/css/main.css">
            </head>
            <body>
                posts page
            </body>
            </html>';
    }

    function posts_new() {
        return '
            <html>
            <head>
                <link rel="stylesheet" type="text/css" href="/css/main.css">
            </head>
            <body>
                form to add a new post
            </body>
            </html>';
    }
/* CONTROLLERS AREA. END */