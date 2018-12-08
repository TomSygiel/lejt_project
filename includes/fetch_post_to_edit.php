<?php

$post_id = $_GET["post_id"];

$fetch_selected_post_statement = $pdo->prepare("SELECT * FROM posts WHERE post_id = :post_id");
$fetch_selected_post_statement->execute(
    [
        ":post_id" => $post_id
    ]
);

$selected_post = $fetch_selected_post_statement->fetch(PDO::FETCH_ASSOC);

?>