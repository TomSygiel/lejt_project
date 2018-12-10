<?php

class Comments

{

    public $comments;

    private $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;
    }

    /* Method for posting a comment, this is called on in single_post.php. The comment is inserted into table comments in database */
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
    /* Method for fetching all posted comments on specific post from table comments, this is called on in single_post.php. */
    public function getComments($post_id)
    {
        $statement = $this->pdo->prepare("SELECT * FROM comments WHERE post_id = :post_id ORDER BY comments_id DESC");

        $statement->execute(
            [
                ":post_id" => $post_id,
            ]
        );

        $all_comments = $statement->fetchAll(PDO::FETCH_ASSOC);

        $this->all_comments = $all_comments;
    }

    /* Method for deleting comments on specific post from table comments, this is called on in single_post.php. */
    public function deleteComments()

    /* Go through this code if you push delete product in single_post.php, meaning delete specific comment from comments table from specific post */
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