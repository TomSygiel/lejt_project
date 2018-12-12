<?php

if(!isset($_GET["post_id"])) {
    echo "<p class='error'>* You haven't selected a post to edit.<br/>You will be redirected to the Admin panel</p>";
    header ('refresh:4;url=admin_allposts.php');
    exit();
} 

else {
    $post_id = $_GET["post_id"];

    $fetch_selected_post_statement = $pdo->prepare("SELECT * FROM posts WHERE post_id = :post_id");
    $fetch_selected_post_statement->execute(
        [
            ":post_id" => $post_id
        ]
    );

    $selected_post = $fetch_selected_post_statement->fetch(PDO::FETCH_ASSOC);
}

?>