<?php
session_start();
?>

<!-- include Head -->
<?php include 'includes/head.php';?>

<!-- include Header -->
<?php include 'includes/header.php';?>

<body>

<!--Skeleton structure to work with for the landing site: Tomasz-->

<div class="container blog_post_window">
    <div class="row">
        <div class="col-12">

            <?php

            require 'includes/database_connection.php';

            $fetch_all_posts_statement = $pdo->prepare("SELECT * FROM `posts` ORDER BY post_id DESC LIMIT 3");
            $fetch_all_posts_statement->execute();
            $all_posts = $fetch_all_posts_statement->fetchAll(PDO::FETCH_ASSOC);  

            //foreach($all_posts as $single_post){
               
            foreach($all_posts as $key => $single_posts){
                echo $key;
            
                
                // if($key == 0){
                //     echo '<div class="main_picture_frame"><img class="main_picture" src="includes/' . $single_post["image"] . '"></div>';
                // }
            }
        
                
            //     
              
            //     echo '<h1 class="h1_index">' . $single_post["title"] . '</h1>';
            //     echo '<div>' . $single_post["post_date"] . '</div>';
            //     echo '<div>' . $single_post["category"] . '</div>';
            //     echo '<div>' . $single_post["description"] . '</div>';

            //     echo '<div class="secondary_picture_frame"><img class="secondary_picture" src="includes/' . $single_post["image"] . '"></div>';
            //     echo '<div class="secondary_picture_frame"><img class="secondary_picture" src="includes/' . $single_post["image"] . '"></div>';
            
            // }

            ?>

            <br/>

        </div>
    </div>
</div>

<!-- include Footer -->
<?php include 'includes/footer.php';?>