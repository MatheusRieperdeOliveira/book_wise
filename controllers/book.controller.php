<?php
require '../public/data.php';

function show()
{
    $bookId = $_REQUEST['id'];

    $book = (new DB())->book($bookId);

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

if($_SERVER['REQUEST_METHOD'] == 'POST') creating_book();

page_create();