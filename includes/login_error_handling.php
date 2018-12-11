<?php
//Error handling reads url and shows error message on screen
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullUrl, "error=empty") == true) {
        echo "<p class='error'>* All fields are required!<br/>You will be redirected back.</p>";
        header ('refresh:3;url=../views/login.php');
        exit();
    }

    elseif (strpos($fullUrl, "error=login_failed") == true) {
        echo "<p class='error'>* Login failed, please try again! If new user, please register!<br/>You will be redirected back</p>";
        header ('refresh:3;url=../views/login.php');
        exit();
    }

?>