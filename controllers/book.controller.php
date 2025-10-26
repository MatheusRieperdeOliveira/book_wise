<?php
require '../public/data.php';

$bookId = $_REQUEST['id'];

$book = (new DB())->book($bookId);

view("book", ["book" => $book]);