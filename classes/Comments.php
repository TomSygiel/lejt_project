<?php

class Comments

{

    public $comments; //objekt, för att komma åt måste du använda pilar

    private $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;
    }
    /*public function register($username, $password) 
    { 

        try{
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");

            $stmt->execute(     
                [
                    ":username" => $username,
                    ":password" => $hashed_password

                ]);
            return true;
        }*/
    public function postComment($content, $post_id, $created_by, $comment_date)
    {
        $statement = $this->pdo->prepare("INSERT INTO comments (content, post_id, created_by, comment_date) VALUES (:content, :post_id, :created_by, :comment_date)");

        $statement->execute(
            [
            ":content" => $content,
            ":post_id" => $post_id,
            ":created_by" => $created_by,
            ":comment_date" => $comment_date

            ]
        );

        return true;

    }

    public function getComments()
    {
        $statement = $this->pdo->prepare("SELECT * FROM comments");

        $statement->execute();

        $all_comments = $statement->fetchAll(PDO::FETCH_ASSOC);

        $this->all_comments = $all_comments;
    }

}