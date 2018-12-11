<?php

//Error handling reads url and shows error message on screen



$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullUrl, "error=empty") == true) {
        echo "<p class='error'>* All fields are required!<br/>You will be redirected back.</p>";
        header ('refresh:3;url=../views/register.php');
        exit();
    }

    if (strpos($fullUrl, "error=usernametaken") == true) {
        echo "<p class='error'>* Username already taken!<br/>You will be redirected back.</p>";
        header ('refresh:3;url=../views/register.php');
        exit();
    }

    if (strpos($fullUrl, "notice=succeed") == true) {
        echo "<p class='notice'>* Registration completed.<br/>Validate your account by logging in.</p>";
        header ('refresh:3;url=../views/login.php');
        exit();
    }

?>