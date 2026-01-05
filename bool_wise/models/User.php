<?php

class User
{
    public int $id;
    public string $name;
    public string $email;
    public string $photo_path;

    public static function make($item): self
    {
        $user = new self();
        $user->id = $item['id'];
        $user->name = $item['title'];
        $user->email = $item['author'];
        $user->photo_path = $item['photo_path'];

        return $user;
    }
}