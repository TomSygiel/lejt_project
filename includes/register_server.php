<?php

// Include database connection and class Register
require 'database_connection.php';
include '../classes/Register.php';

$register = new Register($pdo);

if (isset($_POST["registration"]) && (empty($_POST['username']) || empty($_POST['password']))){

    // If username or password left empty -> registration fails, after 3 seconds user gets redirected to register.php
    header ('Location:../views/register.php?error=empty');
    exit();

}

if (!empty($_POST['username']) && !empty($_POST['password'])){

    $find_user = $register->fetched_user($_POST["username"]);
    
    if ($_POST['username'] == $find_user["username"]){

        // Username is alreday in database, after 3 seconds go back to register.php for try again
        header ('Location:../views/register.php?error=usernametaken');
        exit();

    }
        
    else{
        
        $register->register($_POST["username"], $_POST["password"]);

        // User filled in username and password, registration succeeded, after 3 seconds go to index.php
        echo "<p class='notice'>* Registration Completed.</p>";
        header ('Location:../views/register.php?notice=succeed');
        exit();

    }    

}

?>