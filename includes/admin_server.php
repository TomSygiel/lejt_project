<?php

include ("database_connection.php");
include ("../classes/Admin_posts.php");



$admin = new Admin($pdo);
$admin->admin($posts);


header("location:../views/admin_allposts.php");
?>