<?php

use models\Book;

function show()
{
    $book = new Book();

    return view("book", ["book" =>  $book->find("id", $_REQUEST['id'])[0]]);
}

function page_form()
{
    if (isset($_REQUEST['id'])) {
        $book = new Book();
        $book = $book->find("id", ($_REQUEST['id']));
    }

    return view("form_book", ["book" => $book ?? null]);
}

function creating_book()
{
    (new DB())->create_book();

    return header("Location: /");
}

function delete_book()
{
    $book_id = $_REQUEST['id'];

    (new DB())->delete_book($book_id);

    return header("Location: /");
}

function update_book()
{
    (new DB())->update_book();

    return header("Location: /");
}

function check(): void
{
    if (isset($_REQUEST['id'])) {
        update_book();
        return;
    }

    creating_book();
}

function page_my_books(): void
{
    $books = (new Book())->find("user_id", 1);

    view('index', ["books" => $books]);
};

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if($_SERVER['PATH_INFO'] === '/delete-book') return delete_book();
    if ($_SERVER['PATH_INFO'] === '/book') return show();
    if ($_SERVER['PATH_INFO'] === '/my-books') return page_my_books();
};

if($_SERVER['REQUEST_METHOD'] === 'POST') return check();

page_form();