<?php
session_start();

require 'database_connection.php';
include '../classes/Posts.php';

$posts = new Post($pdo);
$posts->deletePostAndComments();

//Redirect to admin_allposts page
header('Location: ../views/admin_allposts.php');

?>