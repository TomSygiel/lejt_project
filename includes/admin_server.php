<?php

include ("database_connection.php");


$statement = $pdo->prepare("SELECT title, created_by, post_date FROM `posts`");
//Execute it
$statement->execute();
//Fetch every row that it returns. $posts is now an Associative array
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


<!-- "SELECT * FROM `posts` JOIN users ON posts.post_id = users.user_id" -->