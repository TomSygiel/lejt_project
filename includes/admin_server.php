<?php

include ("database_connection.php");


$statement = $pdo->prepare("SELECT * FROM `posts` JOIN users ON posts.post_id = users.user_id");
//Execute it
$statement->execute();
//Fetch every row that it returns. $posts is now an Associative array
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

?>