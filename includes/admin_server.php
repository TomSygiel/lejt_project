<?php

include ("database_connection.php");

//Selects title, created by and date from database
$statement = $pdo->prepare("SELECT title, created_by, post_date FROM `posts`");
//Execute it
$statement->execute();
//Fetch every row that it returns. $posts is now an Associative array
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
