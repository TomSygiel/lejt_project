<?php

class Admin
{
    private $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;

    }

    public function getAlladminPosts() {
        $statement_to_collect = $this->pdo->prepare("SELECT * FROM posts ORDER BY post_id DESC");
        $statement_to_collect->execute();
        $admin = $statement_to_collect->fetchAll();

        return $admin;
    }

}

?>


