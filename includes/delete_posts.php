<?php
session_start();

include ("database_connection.php");
require '../classes/Posts.php';

$posts = new Post($pdo);
$posts->deletePostAndComments();

//Redirect to admin_allposts page

header('Location: ../views/admin_allposts.php');
?>