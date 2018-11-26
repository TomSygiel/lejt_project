<?php
session_start();


include ("database_connection.php");
include ("../classes/Login.php");
// Same value in both $_POST["username"] and $username


$login = new Login($pdo);
$login->login($_POST["username"]);

// registrate then go back to index.php for login
//header("location:../index.php");
header("location:../views/login.php");


?>











