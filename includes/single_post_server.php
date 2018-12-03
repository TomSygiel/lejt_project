<?php
    include '../classes/Single_post.php';

    require '../includes/database_connection.php';

    /* Check when creating a new post that $_POST["post_id] is sent for the query to work! */
    $post_id = $_POST["post_id"];

    //Fetching chosen post to display
    $statement = $pdo->prepare("SELECT title, description, created_by, image FROM posts 
    WHERE post_id = :post_id");

    $statement->execute(
        [
            ":post_id" => $post_id
        ]
    );

    $single_post = $statement->fetchAll(PDO::FETCH_ASSOC);  