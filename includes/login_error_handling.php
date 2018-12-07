<?php

$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullUrl, "error=empty") == true) {
        echo "<p class='error'>* All fields are required!</p>";
        header ('refresh:5;url=../views/login.php');
        exit();
    }

    elseif (strpos($fullUrl, "error=login_failed") == true) {
        echo "<p class='error'>* Login failed, please try again! If new user, please register!</p>";
        header ('refresh:5;url=../views/login.php');
        exit();
    }

?>