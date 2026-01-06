<?php

namespace models;

use app\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = [
        'id',
        'title',
        'author',
        'description',
        'photo_path',
    ];

    public int $id;
    public string $title;
    public string $author;
    public string $description;
    public string $photo_path;

    public function all(): array
    {
        $booksInBase = parent::all();

        return array_map(fn ($book) => self::make($book), $booksInBase);
    }

    protected static function make(array $item): Book
    {
        $book = new static();
        $book->id = (int) $item['id'];
        $book->title = $item['title'];
        $book->author = $item['author'];
        $book->description = $item['description'];
        $book->photo_path = $item['photo_path'] ?? null;

        return $book;
    }

}
