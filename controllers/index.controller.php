<?php
    require '../public/data.php';

    view("index", ["books" => $books]);