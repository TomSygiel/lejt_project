<?php
session_start();

require 'database_connection.php';
include '../classes/Posts.php';

$posts = new Post($pdo);
$posts->deletePostAndComments();

//Redirect to index page
header('Location: ../index.php');

?>