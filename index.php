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

            //check if correct array is returned
            //highlight_string("<?php =\n" . var_export($all_posts, true) . ";\n");

                //Loops through associative array
                foreach($all_posts as $i => $i_array) {
                
                    //Check value of variable i. If 0 then echo main blog post.
                    if($i === 0){
                        echo '<div class="main_picture_frame"><img class="main_picture" src="includes/' . $i_array["image"] . '"></div>';
                        echo '<h1 class="h1_index">' . $i_array["title"] . '</h1>';
                        echo '<div>' . $i_array["post_date"] . '</div>';
                        echo '<div>' . $i_array["category"] . '</div>';
                        echo '<div>' . $i_array["description"] . '</div>';
                    }
                    
                    //Check value of variable i. If 1 then echo secondary blog post.
                    if($i === 1)  {
                        echo '<div class="secondary_picture_frame"><img class="secondary_picture" src="includes/' . $i_array["image"] . '"></div>';
                        echo '<h1 class="h1_index">' . $i_array["title"] . '</h1>';
                        echo '<div>' . $i_array["post_date"] . '</div>';
                        echo '<div>' . $i_array["category"] . '</div>';
                        echo '<div>' . $i_array["description"] . '</div>';
                    }
                    
                    //Check value of variable i. If 2 then echo secondary blog post.
                    if($i === 2)  {
                        echo '<div class="secondary_picture_frame"><img class="secondary_picture" src="includes/' . $i_array["image"] . '"></div>';
                        echo '<h1 class="h1_index">' . $i_array["title"] . '</h1>';
                        echo '<div>' . $i_array["post_date"] . '</div>';
                        echo '<div>' . $i_array["category"] . '</div>';
                        echo '<div>' . $i_array["description"] . '</div>';
                    }
                }
            ?>
            <br/>
        </div>
    </div>
</div>

<!-- include Footer -->
<?php include 'includes/footer.php';?>