<?php

    /*require '../includes/database_connection.php';
    include '../classes/Single_post.php';*/
    //require '../classes/Posts.php';

    /*$title = $_POST["title"];
    $description = $_POST["description"];
    $created_by = $_SESSION["username"];
    $image = $_FILES["image"];
    $category = $_POST["category_select"];
    $post_date = date('Y/m/d');*/

    /*$single_post = new SinglePost($pdo);
    $single_post->singlePost($title, $description, $created_by, $image, $category, $post_date);*/
    
    //Fetching chosen post to display






    // THIS WORKS IF ALL ABOVE IS COMMENTED OUT
    $statement = $pdo->prepare("SELECT title, description, created_by, image FROM posts 
    WHERE post_id = 3");

    $statement->execute();

    $single_post = $statement->fetchAll(PDO::FETCH_ASSOC);