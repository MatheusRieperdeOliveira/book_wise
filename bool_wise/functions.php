<?php

function abort($code)
{
    http_response_code($code);
    view('404');
    die();
}

function view($view, $data = [])
{
    foreach ($data as $key => $value) {
        $$key = $value;
    }

    require "../views/template/app.php";
}

function dd(...$vars)
{
    echo "<pre>";
    var_dump($vars);
    echo "</pre>";
    die();
}

function initialize_project()
{
    $db = new DB();

    $db->create_books_table();
    $db->create_users_table();
}

function auth() {
    if (!isset($_SESSION['user_id'])) {
        header("Location: /login");
        exit;
    }
}


initialize_project();