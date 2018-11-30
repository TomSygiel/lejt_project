<?php
session_start();


include ("database_connection.php");

// Check connection
if ($pdo->connect_error) {
    die("Connection failed: " . $pdo->connect_error);
} 

if(isset($_GET['post_id'])){
    $statement = $pdo->prepare("DELETE FROM posts WHERE post_id = :post_id");
    // remove post from database
    $statement->execute(
        [
            ":post_id" => $_GET["post_id"]
        ]
    );
   
}



header('Location: ../views/admin_allposts.php');
?>