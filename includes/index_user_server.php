<?php

// Include database connection
include ("database_connection.php");

// Fetch selected posts from database
$fetch_all_posts_statement = $pdo->prepare("SELECT * FROM `posts` ORDER BY post_id DESC LIMIT 3");
$fetch_all_posts_statement->execute();
$all_posts = $fetch_all_posts_statement->fetchAll(PDO::FETCH_ASSOC);

?>