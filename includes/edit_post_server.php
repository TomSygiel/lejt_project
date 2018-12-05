<?php

session_start();

require 'database_connection.php';
require '../classes/Posts.php';

//var_dump($_FILES);

//For editing post, define post_id

$post_id = $_GET["post_id"];

//For creating new post, define all neccesary variables

$image = $_FILES["image"];
$title = $_POST["title"];
$description = $_POST["description"];
$created_by = $_SESSION["username"];
$category = $_POST["category_select"];
$post_date = date('Y/m/d');

//Upload files
$temporary_location =  $image["tmp_name"];

$new_location = "uploads/" . $image["name"];

$upload_ok = move_uploaded_file($temporary_location, $new_location);

//Call on functions in class

$posts = new Post($pdo);
$posts->editPost($title, $description, $created_by, $new_location, $category, $post_date);

//Re-direct to index

header ('Location: ../index.php');

?>