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

    public function book(int $id): Book
    {
        $sql = "SELECT * FROM books";

        $sql .= " where id = " . $id;

        $query = $this->connection->query($sql);

        $booksInBase = $query->fetchAll();

        return Book::make($booksInBase[0]);

    }

    public function create_book(): void
    {
        $sql = "insert into books (title, author, description) values (:title, :author, :description)";

        $query = $this->connection->prepare($sql);

        $query->bindValue(':title', $_POST['title']);
        $query->bindValue(':author', $_POST['author']);
        $query->bindValue(':description', $_POST['description']);

        $query->execute();
    }
}