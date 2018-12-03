<?php


class SinglePost

{

    private $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;
    }

    public function singlepost($title, $description, $created_by, $image, $category, $post_date)
    {
        $statement = $this->pdo->prepare("SELECT title, description, created_by, image, category, post_date FROM posts 
        WHERE post_id = :post_id");

        $statement->execute(
            [
                ":post_id" => $post_id
            ]
        );

        return true;

    }

}