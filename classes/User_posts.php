<?php

class User
{
    private $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;

    }

    public function getAlluserPosts() {
        $statement = $this->pdo->prepare("SELECT * FROM posts ORDER BY post_id DESC");
        $statement ->execute();
        $user = $statement ->fetchAll();

        return $user;
    }

}

?>


