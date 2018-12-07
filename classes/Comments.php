<?php

class Comments

{

    public $comments; //objekt, för att komma åt måste du använda pilar

    private $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;
    }

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

    public function deleteComments()

    /* Go through this code if you push delete product in confirm.php, meaning delete specific product from addToCart table from specific userID */
    {
        if(isset($_GET["comments_id"])){

           $comments_id = $_GET["comments_id"];

        $statement = $this->pdo->prepare("DELETE FROM comments
        WHERE comments_id = :comments_id");

        $statement->execute(
            [
                ":comments_id" => $comments_id
            ]
        );

        return true;

        }
    }

}