<?php
require '../public/data.php';

function show()
{
    $book = (new DB())->book($_REQUEST['id']);

    return view("book", ["book" => $book]);
}

function page_form()
{
    if (isset($_REQUEST['id'])) {
        $book = (new DB())->book($_REQUEST['id']);
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

function check()
{
    if (isset($_REQUEST['id'])) {
        return update_book();
    }

    creating_book();
}

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if($_SERVER['PATH_INFO']=== '/delete-book') return delete_book();
    if ($_SERVER['PATH_INFO']=== '/book') return show();

};

if($_SERVER['REQUEST_METHOD'] === 'POST') return check();

page_form();