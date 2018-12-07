<?php

include ("database_connection.php");
include ("../classes/Register.php");

$register = new Register($pdo);





if (!empty($_POST['username']) && !empty($_POST['password'])){



    $find_user = $register->fetched_user($_POST["username"]);
   


    if ($_POST['username'] == $find_user["username"]){

        echo "<p class='error'>* Username is already taken. </p>";
        header ('refresh:5;url=../views/register.php?error=usernametaken');
        exit();
    }else{
        $register->register($_POST["username"], $_POST["password"]);

        echo "<p class='error'>* Registration Completed.</p>";
        header ('refresh:5;url=../index.php?success');
        exit();

    }


}else{

    echo "<p class='error'>* Registration failed, please fill in username and password. </p>"; 
    header ('refresh:5;url=../views/register.php?error=failed');
    exit();

}


// registrate then go back to index.php for login
//header("location:../index.php");
?>