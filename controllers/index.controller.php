<?php

use models\Book;

    $book = new Book();

    view("index", ["books" => $book->all()]);