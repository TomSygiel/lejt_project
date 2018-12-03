<?php

include ("database_connection.php");
include ("../classes/Register.php");



$register = new Register($pdo);
$register->register($_POST["username"], $_POST["password"]);


// registrate then go back to index.php for login
header("location:../index.php");
?>