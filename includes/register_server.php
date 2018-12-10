<?php

include ("database_connection.php");
include ("../classes/Register.php");

$register = new Register($pdo);


if (!empty($_POST['username']) && !empty($_POST['password'])){



    $find_user = $register->fetched_user($_POST["username"]);
    
    if ($_POST['username'] == $find_user["username"]){

        echo "<p class='error'>* Username is already taken. </p>";
        // username is alreday in database, efter 3 second go back to register.php for try again
        header ('refresh:3;url=../views/register.php?error=usernametaken');
        exit();
    }
    
    if (empty($_POST['username']) || empty($_POST['password'])){
        echo "<p class='error'>* Registration failed, please fill in username and password. </p>";
        // if user is not write in username or password, registration failed, efter 3 second go to register.php
        header ('refresh:3;url=../views/register.php?error=empty');
        exit();
    }
    
    else{
        $register->register($_POST["username"], $_POST["password"]);
        // user filled in username and password, registration succed, efter 3 second go to index.php
        echo "<p class='error'>* Registration Completed.</p>";
        header ('refresh:3;url=../index.php?succeed');
        exit();
    }    

}


?>