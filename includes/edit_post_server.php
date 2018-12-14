<?php
session_start();

require 'database_connection.php';
include '../classes/Posts.php';

//For editing post, define post_id
$post_id = $_GET["post_id"];
$title = $_POST["title"];
$description = $_POST["description"];


//Call on method in class
$posts = new Post($pdo);
$posts->editPost($title, $description, $post_id);

//Re-direct to index
header ('Location: ../index.php');

?>