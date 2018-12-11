<?php

// Include database connection
include 'database_connection.php';
include 'classes/Index_posts.php';

$object = new Posts($pdo);
$posts = $object->getAllPosts();

//Selects from database in descending order
$statement = $pdo->prepare("SELECT * FROM `posts` ORDER BY post_id DESC LIMIT 3");
//Execute it
$statement->execute();
//Fetch every row that it returns. $posts is now an Associative array
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
?>