<?php
session_start();

include ("database_connection.php");

//Remove post from database
if(isset($_GET['post_id'])){
    $statement = $pdo->prepare("DELETE FROM posts WHERE post_id = :post_id");
    $statement->execute(
        [
            ":post_id" => $_GET["post_id"]
        ]
    );
}
//Redirect to admin_allposts page
header('Location: ../views/admin_allposts.php');
?>