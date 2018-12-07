<?php

session_start();

require 'database_connection.php';
require '../classes/Posts.php';

//var_dump($_FILES);

$image = $_FILES["image"];
$title = $_POST["title"];
$description = $_POST["description"];
$created_by = $_SESSION["username"];
$category = $_POST["category_select"];
$post_date = date('Y/m/d');

$temporary_location =  $image["tmp_name"];

$new_location = "uploads/" . $image["name"];

$upload_ok = move_uploaded_file($temporary_location, $new_location);

$posts = new Post($pdo);
$posts->blogPost($new_location, $title, $description, $created_by, $category, $post_date);
// $posts->deletePost();

header ('Location: ../index.php');

?>