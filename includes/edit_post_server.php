<?php

session_start();

require 'database_connection.php';
require '../classes/Posts.php';

//var_dump($_FILES);

//For editing post, define post_id

$post_id = $_GET["post_id"];
$title = $_POST["title"];
$description = $_POST["description"];


//Call on functions in class

$posts = new Post($pdo);
$posts->editPost($title, $description, $post_id);

//Re-direct to index

header ('Location: ../index.php');

?>