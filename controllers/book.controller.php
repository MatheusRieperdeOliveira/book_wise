<?php
require '../public/data.php';

function show()
{
    $book_id = $_REQUEST['id'];

    $book = (new DB())->book($book_id);

    return view("book", ["book" => $book]);
}

function page_create()
{
    return view("create_book");
}

function creating_book(): void
{
    (new DB())->create_book();

}

function delete_book()
{
    $book_id = $_REQUEST['id'];

    (new DB())->delete_book($book_id);

    return header("Location: /");
}

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if($_SERVER['PATH_INFO']=== '/delete-book') return delete_book();
    if ($_SERVER['PATH_INFO']=== '/book') return show();

};

if($_SERVER['REQUEST_METHOD'] === 'POST') return creating_book();

page_create();