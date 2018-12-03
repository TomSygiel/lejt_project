<?php
    require '../includes/database_connection.php';
    include '../classes/Single_post.php';

    $single_post = new SinglePost($pdo);
    $single_post->singlepost($title, $description, $created_by, $image, $category, $post_date);

    header('Location: ../views/single_post.php');  





    /* Check when creating a new post that $_POST["post_id] is sent for the query to work! */
    /*$post_id = $_POST["post_id"];

    //Fetching chosen post to display
    $statement = $pdo->prepare("SELECT title, description, created_by, image FROM posts 
    WHERE post_id = :post_id");

    $statement->execute(
        [
            ":post_id" => $post_id
        ]
    );

    $single_post = $statement->fetchAll(PDO::FETCH_ASSOC);  */