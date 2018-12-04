<?php
session_start();

// Include head
include '../includes/head.php';
// Include header
include '../includes/header.php';
// Include single post server
//include '../includes/single_post_server.php';
// Include database-connection
include '../includes/database_connection.php';
// Include SinglePost class
include '../classes/Single_post.php';

?>

<div class="container single_post">
    <div class="col-10">

        <?php

           $post = new SinglePost($pdo);
           $post->getSinglePost();
           $post->single_post; //hämtar public $single_post från klass (det är en arrray)
           $array = $post->single_post; //istället för att skriva $post->single_post; hela tiden

            /* Looping through and showing chosen values to display a specific blog post from reaching out to database above. sp_part stands for single post part */
            foreach($array as $sp_part){ ?>

                <div class="single_title">
                    <?php echo "<h2>" . $sp_part["title"] . "</h2> <br>"; ?>
                </div>

                <div class="single_img">
                    <img src="../includes/<?php echo $sp_part['image']; ?>" alt="blog post image">
                </div>

                <div class="single_description">
                    <?php echo "<p>" . $sp_part["description"] . "</p> <br>"; ?>
                </div>
                    
                <div class="single_category">
                    <?php echo "<p>" . $sp_part["category"] . "</p> <br>"; ?>
                </div>

                <div class="single_date">
                    <?php echo "<p>" . $sp_part["post_date"] . "</p> <br>"; ?>
                </div>

        <?php
        }

        ?>

    </div>

</div>

<?php
// Include footer
include '../includes/footer.php';
?>