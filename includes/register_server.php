<?php

include ("database_connection.php");
include ("../classes/Register.php");



if (isset($_POST['username']) && ($_POST['password'])){

    $register = new Register($pdo);
    $register->register($_POST["username"], $_POST["password"]);
    echo 'Registration Completed.';



if ($_POST['username'] == $fetched_user["username"]){

        
        $fetched_user->fetched_user($_POST["username"]);

        echo 'Username is already taken.';
    }

}

else{
    echo 'Registration failed, please fill in username and password.'; 

}







// registrate then go back to index.php for login
//header("location:../index.php");
?>