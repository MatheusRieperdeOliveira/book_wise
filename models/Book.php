<?php

namespace models;

use app\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = [
        'title',
        'author',
        'description',
        'photo_path',
        'user_id'
    ];

    public int $id;
    public string $title;
    public string $author;
    public string $description;
    public string $photo_path;

    public function create()
    {
        parent::create();
    }
    public function all(): array
    {
        $booksInBase = parent::all();

        return array_map(fn ($book) => self::make($book), $booksInBase);
    }

    public function find(string $column, int $id): array
    {
        $booksInBase = parent::find($column, $id);

        return array_map(fn ($book) => self::make($book), $booksInBase);
    }

    protected static function make(array $item): Book
    {
        $book = new self();
        $book->id = $item['id'];
        $book->title = $item['title'];
        $book->author = $item['author'];
        $book->description = $item['description'];
        $book->photo_path = $item['photo_path'] ?? null;

        return $book;
    }
}
