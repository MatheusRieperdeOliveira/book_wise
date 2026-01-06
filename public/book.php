<?php
require 'data.php';

$bookId = $_REQUEST['id'];

$filter = array_filter($livros, fn($livro) => $livro['id'] == $bookId);

$book = array_pop($filter);

$view = 'book';

require "../views/template/app.php";
