<?php

/* APP INIT AREA. BEGIN */
    define('BASE_DIR', __DIR__);

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

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

        '/'          => 'posts_index',

        '/posts/new' => 'posts_new',
        // TODO NEXT VERSIONS: handle ULRs with params like '/posts/<id>/edit'
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

    function posts_index() {
        $posts = [
            ['id' => 1, 'title' => 'Post 1', 'body' => 'Post 1 body'],
            ['id' => 2, 'title' => 'Post 2', 'body' => 'Post 2 body'],
            ['id' => 3, 'title' => 'Post 3', 'body' => 'Post 3 body'],
        ];
        return view('posts/index', compact('posts'));
    }

    function posts_new() {
        return view('posts/new');
    }
/* CONTROLLERS AREA. END */