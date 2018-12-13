<?php

class User
{
    private $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;

    }
    /* Method for fetching all post from table posts in database, and display senast posts */
    public function getAlluserPosts() {
        $statement = $this->pdo->prepare("SELECT * FROM posts ORDER BY post_id DESC");
        $statement ->execute();
        $user = $statement ->fetchAll();

        return $user;
    }

}

?>


