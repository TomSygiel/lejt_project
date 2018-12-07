<?php

class SinglePost

{

    public $single_post; //objekt, för att komma åt måste du använda pilar

    private $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;
    }

    public function getSinglePost()
    {
        $statement = $this->pdo->prepare("SELECT * FROM posts where post_id = 6/*:post_id*/");

        $statement->execute(
            [
                //":post_id" => $post_id
            ]
        );

        $single_post = $statement->fetchAll(PDO::FETCH_ASSOC);

        $this->single_post = $single_post;

        //return $single_post;
    }

}

/*
class SinglePost

{

    private $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;
    }

    public function collectSinglePost()
    {
        $statement = $this->pdo->prepare("SELECT title, description, created_by, image, category, post_date FROM posts 
        WHERE post_id = 3");

        $statement->execute();

        $display_post = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $display_post /*true*//*;

    }

}*/

/*$statement = $pdo->prepare("SELECT * *//*title, description, created_by, image*/ /*FROM posts 
WHERE post_id = 3");

$statement->execute();

$single_post = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($single_post);*/

/*

TRYING TO WHILE-LOOP

class SinglePost

{

    private $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;
    }

    public function collectSinglePost()
    {
        $statement = $this->pdo->prepare("SELECT title, description, created_by, image, category, post_date FROM posts 
        WHERE post_id = 3");
        while ($post = $statement->fetch()){
            $single_post = $post["post_id"];
            return $post_id;
        }
        var_dump($post_id);
    }

}*/