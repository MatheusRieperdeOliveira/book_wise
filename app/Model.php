<?php

namespace app;

use DB;
use models\Book;

abstract class Model
{
    protected $table;
    protected $fillable;
    private DB $database;

    public function __construct()
    {
        $this->database = new DB();
    }

    public function all(): array
    {
        return $this->database->all($this->table);
    }

    public function find(string $column, int $id): array
    {
        return $this->database->find($this->table, $column, $id);
    }
}