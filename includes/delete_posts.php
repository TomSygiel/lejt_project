<?php
session_start();


include ("database_connection.php");



$statement = $pdo->prepare("DELETE FROM posts WHERE post_id = :post_id");
// remove product from database
$statement->execute(
    [
        ":post_id" => $_GET["post_id"]
    ]
);
$delete_posts = $statement->fetchAll(PDO::FETCH_ASSOC);
// efter remove product, go to shoppingcart.php
header('Location: ../views/admin_allposts.php');
?>