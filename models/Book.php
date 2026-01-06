<?php

namespace models;
class Book
{
    public int $id;
    public string $title;
    public string $author;
    public string $description;
    public string $photo_path;

    public static function make($item): self
    {
        $book = new self();
        $book->id = $item['id'];
        $book->title = $item['title'];
        $book->author = $item['author'];
        $book->description = $item['description'];
        $book->photo_path = $item['photo_path'];

        return $book;
    }
}
