<?php

require_once __DIR__.'/../autoload.php';

db()->exec("DROP TABLE IF EXISTS posts");
db()->exec("CREATE TABLE posts (id INTEGER PRIMARY KEY, title TEXT, body TEXT)");
db()->exec("INSERT INTO posts (title, body) VALUES ('post 1', 'body 1')");
db()->exec("INSERT INTO posts (title, body) VALUES ('post 2', 'body 2')");
db()->exec("INSERT INTO posts (title, body) VALUES ('post 3', 'body 3')");
db()->exec("INSERT INTO posts (title, body) VALUES ('post 4', 'body 4')");
