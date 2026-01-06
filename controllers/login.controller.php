<?php

function move_to_login(): void
{
    view('login');
}

function move_to_login_create(): void
{
    view('login_create');
}

function create_login(): void
{
    $db = new DB();

    $db->create_user();
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && $_SERVER["PATH_INFO"] == "/login") {
    move_to_login();
    return;
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && $_SERVER["PATH_INFO"] == "/login-create") {
    move_to_login_create();
    return;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_SERVER["PATH_INFO"] == "/login-create") {
    create_login();
    return header("Location: /login");
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_SERVER["PATH_INFO"] == "/login") {
    dd($_POST);
}