<?php

class SinglePost

{

    public $single_post;

    private $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;
    }

    /* Method for fetching specific post from table posts in database, this is called on in single_post.php. */
    public function getSinglePost()
    {
        $post_id = $_GET["post_id"];

        $statement = $this->pdo->prepare("SELECT * FROM posts where post_id = :post_id");

        $statement->execute(
            [
                ":post_id" => $post_id
            ]
        );

        $single_post = $statement->fetchAll(PDO::FETCH_ASSOC);

        $this->single_post = $single_post;

    }

}