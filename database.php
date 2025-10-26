<?php
class DB
{
    public PDO $connection;

    public function __construct()
    {
        $this->connection = new PDO("pgsql:host=database;dbname=book_wise;port=5432;user=mathz;password=leagueofdraven");
    }

    public function books(): array
    {
        $query = $this->connection->query("select * from books");

        $booksInBase = $query->fetchAll();

        return array_map(fn ($book) => Book::make($book), $booksInBase);
    }

    public function book(int $id)
    {
        $sql = "SELECT * FROM books";

        $sql .= " where id = " . $id;

        $query = $this->connection->query($sql);

        $booksInBase = $query->fetchAll();

        return Book::make($booksInBase[0]);

    }
}