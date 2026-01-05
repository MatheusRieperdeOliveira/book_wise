<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function requireAuth(): void
{
    if (empty($_SESSION['user_id'])) {
        header("Location: /login");
        exit;
    }
}

function isLogged() {
    return !empty($_SESSION['user_id']);
}