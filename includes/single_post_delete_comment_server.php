<?php
session_start();

include "database_connection.php";
include "../classes/Comments.php";

$delete_comment = new Comments($pdo);
$delete_comment->deleteComments($_GET["comments_id"]);

// Delete your comment and then go back to the specific post
header("Location: ../views/single_post.php?post_id=".$_GET["post_id"]);

?>