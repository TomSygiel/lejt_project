<?php

include ("database_connection.php");
include ("../classes/Admin_posts.php");



$admin = new Admin($pdo);
$admin->admin($post_id, $title, $created_by);


header("location:../views/admin_allposts.php");
?>