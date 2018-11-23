<?php

include ("database_connection.php");

$username = $_POST["username"];
$password = $_POST["password"];


// password_hash must always have two arguments
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// save users information to database
$statement = $pdo->prepare("INSERT INTO users
  (username, password) VALUES (:username, :password)");
// Execute populates the statement and runs it
$statement->execute(
    [
        ":username" => $username,
        ":password" => $hashed_password

    ]


);
// registrate then go back to index.php for login
header("location:../index.php");
?>