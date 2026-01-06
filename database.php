<?php

use models\Book;

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
        if(isset($_FILES['photo'])) {
            move_uploaded_file($_FILES['photo']['tmp_name'], __DIR__ . "/storage/book_cover/" . $_FILES['photo']['name']);
        };

        $sql = "insert into books (title, author, description, photo_path, user_id) values (:title, :author, :description, :photo_path, :user_id)";

        $query = $this->connection->prepare($sql);

        $query->bindValue(':title', $_POST['title']);
        $query->bindValue(':author', $_POST['author']);
        $query->bindValue(':photo_path', $_FILES['photo']['name']);
        $query->bindValue(':description', $_POST['description']);
        $query->bindValue(':user_id', 1);

        $query->execute();
    }

    public function delete_book(int $id): void
    {
        $sql = "DELETE FROM books WHERE id = :id";

        $query = $this->connection->prepare($sql);

        $query->bindValue(':id', $id);

        $query->execute();
    }

    public function update_book()
    {
        if(isset($_FILES['photo'])) {
            move_uploaded_file($_FILES['photo']['tmp_name'], __DIR__ . "/storage/" . $_FILES['photo']['name']);
        };

        $sql = "UPDATE books SET title = :title, author = :author, description = :description, photo_path = :photo_path WHERE id = :id";

        $query = $this->connection->prepare($sql);

        $query->bindValue(':id', $_REQUEST['id']);
        $query->bindValue(':title', $_POST['title']);
        $query->bindValue(':author', $_POST['author']);
        $query->bindValue(':photo_path', $_FILES['photo']['name']);
        $query->bindValue(':description', $_POST['description']);

        $query->execute();
    }

    public function create_user(): void
    {
        $path =  __DIR__ . "/storage/users/" . $_POST['user_name']. "/";

        mkdir($path, 0777, true);

        if(isset($_FILES['user_photo'])) {
            move_uploaded_file($_FILES['user_photo']['tmp_name'], $path . $_FILES['user_photo']['name']);
        };

        $sql = "insert into users (name, email, password, photo_path) values (:name, :email, :password, :photo_path)";

        $query = $this->connection->prepare($sql);

        $query->bindValue(':name', $_POST['user_name']);
        $query->bindValue(':email', $_POST['email']);
        $query->bindValue(':password', $_POST['password']);
        $query->bindValue(':photo_path', $_FILES['user_photo']['name']);

        $query->execute();
    }

    public function create_books_table(): void
    {
        $sql = "CREATE TABLE IF NOT EXISTS books (
        id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        description VARCHAR(255),
        author VARCHAR(255),
        photo_path VARCHAR(255),
        user_id INTEGER NOT NULL
    )";

        $query = $this->connection->prepare($sql);
        $query->execute();
    }

    public function create_users_table(): void
    {
        $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255),
        password VARCHAR(255),
        photo_path VARCHAR(255)
    )";

        $query = $this->connection->prepare($sql);
        $query->execute();
    }

}