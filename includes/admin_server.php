<?php

include ("database_connection.php");
include ('../classes/Admin_posts.php');

$object = new Admin($pdo);
$admin = $object->getAlladminPosts();


//Selects from database in descending order
$statement = $pdo->prepare("SELECT post_id, title, created_by, post_date FROM `posts` ORDER BY post_id DESC ");
//Execute it
$statement->execute();
//Fetch every row that it returns. $posts is now an Associative array
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
