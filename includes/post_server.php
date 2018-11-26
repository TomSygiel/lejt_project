<?php

require 'database_connection.php';
require '../classes/Posts.php';

var_dump($_FILES);

$image = $_FILES["image"];
$title = $_POST["title"];
$description = $_POST["description"];
$created_by = $_SESSION["username"];

$temporary_location = $image["tmp_name"];

$new_location = "uploads/" . $image["name"];

$upload_ok = move_upload_file($temporary_location, $new_location);

$posts = new Post($pdo);
$posts->blogPost($image, $title, $description, $created_by, $upload_ok);
$posts->deletePost();