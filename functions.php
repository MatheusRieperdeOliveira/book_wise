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
