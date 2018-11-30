<?php
session_start();


include ("database_connection.php");
include ("../classes/Login.php");



$login = new Login($pdo);
$login->login($_POST["username"]);



header("location:../index.php");


?>











