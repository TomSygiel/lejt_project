<?php

include ("database_connection.php");
include ('../classes/Admin_posts.php');

$object = new Admin($pdo);
$admin = $object->getAlladminPosts();

?>
