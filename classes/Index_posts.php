<?php

class Posts
{
    private $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;

    }

    public function getAllPosts() {
        $statement_to_collect = $this->pdo->prepare("SELECT * FROM `posts` ORDER BY post_id DESC LIMIT 3");
        $statement_to_collect->execute();
        $posts = $statement_to_collect->fetchAll();

        return $posts;
    }

}

?>
