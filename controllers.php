<?php

namespace Controllers;

function posts_index() {
    $posts = db()->query('SELECT * FROM posts')->fetchAll();
    return view('posts/index', compact('posts'));
}

function posts_new() {
    return view('posts/new');
}
