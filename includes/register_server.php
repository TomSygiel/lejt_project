<?php

include ("database_connection.php");
include ("../classes/Register.php");

$register = new Register($pdo);

if (isset($_POST["registration"]) && (empty($_POST['username']) || empty($_POST['password']))){

    // If username or password left empty , registration fails, efter 3 second user gets redirected to register.php
    header ('Location:../views/register.php?error=empty');
    exit();
}

if (!empty($_POST['username']) && !empty($_POST['password'])){

    $find_user = $register->fetched_user($_POST["username"]);
    
        if ($_POST['username'] == $find_user["username"]){

            // username is alreday in database, efter 3 second go back to register.php for try again
            header ('Location:../views/register.php?error=usernametaken');
            exit();
        }
        
        else{
            $register->register($_POST["username"], $_POST["password"]);
            // user filled in username and password, registration succeed, efter 3 second go to index.php
            echo "<p class='notice'>* Registration Completed.</p>";
            header ('Location:../views/register.php?notice=succeed');
            exit();
        }    

}


?>