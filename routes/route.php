<?php
//dd($_POST);
$controller = 'index';

if (isset($_SERVER['PATH_INFO'])) {
    $controller = str_replace('/', '', $_SERVER['PATH_INFO']);

    if(str_contains($controller, 'book')) {
        $controller = "book";
    }
}

if (! file_exists("../controllers/$controller.controller.php")) {
    abort(404);
}

require "../controllers/$controller.controller.php";