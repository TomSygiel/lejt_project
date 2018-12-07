<?php
session_start();

// Include head
include '../includes/head.php';
// Include header
include '../includes/header.php';
// Include database-connection
include '../includes/database_connection.php';
// Include SinglePost class
include '../classes/Single_post.php';
// Include Comments class
include '../classes/Comments.php';
?>

<main class="container single_post_main">

        <?php

           $post = new SinglePost($pdo);
           $post->getSinglePost();
           $post->single_post; //hämtar public $single_post från klass (det är en arrray)
           $array = $post->single_post; //istället för att skriva $post->single_post; hela tiden

            /* Looping through and showing chosen values to display a specific blog post from reaching out to database above. sp_part stands for single post part */
            foreach($array as $sp_part){
                    $post_id = $sp_part["post_id"];
                    ?>
                    <div class="row text-center">

                        <div class="col-12 single_post_title">
                            <?php echo "<h1>" . $sp_part["title"] . "</h1>"; ?>
                        </div>

                    </div>

                    <div class="row text-center">

                        <div class="col-12 col-md-6 single_post_image_frame">
                            <img class="single_post_image" src="../includes/<?php echo $sp_part['image']; ?>" alt="blog post image">
                        </div>

                        <div class="col-12 col-md-6 text-center single_post_description">
                            <?php echo "<p>" . $sp_part["description"] . "</p>"; ?>
                        </div>

                    </div>

                    <div class="row">
                            
                        <div class="col-6 single_post_category">
                            <?php echo "<p>" . "Category: " . $sp_part["category"] . "</p>" . " "; ?>
                        </div>  

                    </div>

                    <div class="row">

                        <div class="col-6 single_post_date">
                            <?php echo "<p>" . $sp_part["post_date"] . "</p>"; ?>
                        </div>
                    </div>

        <?php
            }
        ?>

    <div class="row comments">

        <section class="card col-12 col-md-6 single_comment_form">

            <form action="../includes/single_post_comment_server.php" method="POST">

                <h2 class="single_h2_form">Comment</h2>

                    <label for="single_comment_text">What do you think?</label><br/>
                    
                    <textarea type="text" name="single_comment_text" placeholder="What do you think?" id="single_comment_text"
                    class="single_comment_text" rows="5"></textarea>

                    <!-- Sending $_SESSION["username"] to single_post_comment_server.php -->
                    <input type="hidden" name="comment_username" value="<?php echo $_SESSION["username"]; ?>">

                    <!-- Sending $post_id to single_post_comment_server.php -->
                    <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">

                    <br>

                    <label for="single_comment_submit">Post your comment</label><br/>

                    <input type="submit" value="Comment" class="btn btn-primary">

            </form>

        </section>

        <section class="col-12 col-md-6 printed_comments">

        <?php

           $comments = new Comments($pdo);
           $comments->getComments();
           $comments->all_comments;
           $comments_array = $comments->all_comments;

                     /* Looping through and showing all comments posted on this specific post */
                     foreach($comments_array as $comments_part){ ?>
    
                            <div class="comment_created_by_content">
                                <h4><b><?php echo $comments_part["created_by"] . ":"?></b></h4>
                        
                                <p><?php echo $comments_part["content"]; ?></p>
                            </div>
                            
                            <div class="comment_date">
                                <p><i><?php echo $comments_part["comment_date"]; ?></i></p>
                            </div>

                            <hr class="hr_printed_comment">

            <?php
                }
            ?>
        
        </section>

    </div>

</main>

<?php
// Include footer
include '../includes/footer.php';
?>