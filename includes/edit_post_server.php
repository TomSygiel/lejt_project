<?php

session_start();

require 'database_connection.php';
require '../classes/Posts.php';

//var_dump($_FILES);

//For editing post, define post_id

$post_id = $_GET["post_id"];

//For creating new post, define all neccesary variables

$title = $_POST["title"];
$description = $_POST["description"];
/*$created_by = $_SESSION["username"];
$category = $_POST["category_select"];
$post_date = date('Y/m/d');*/

//Call on functions in class

$posts = new Post($pdo);
$posts->editPost(/*$title, $description/*, $created_by, $category, $post_date, $post_id*/);

//Re-direct to index

header ('Location: ../index.php');

?>