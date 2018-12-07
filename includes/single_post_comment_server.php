<?php
session_start();

include "database_connection.php";
include "../classes/Comments.php";

$content = $_POST["single_comment_text"];
$post_id = $_POST["post_id"];
$created_by = $_SESSION["username"];
$comment_date = date('Y/m/d');

$new_comment = new Comments($pdo);
$new_comment->postComment($content, $post_id, $created_by, $comment_date);

// Create a new comment and then go back to the specific post you've commented
header("Location: ../views/single_post.php?post_id=".$_GET['post_id']);

?>