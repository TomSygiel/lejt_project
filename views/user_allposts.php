<?php
session_start();
?>

<!-- include Head -->
<?php include '../includes/head.php';?>

<!-- include Header -->
<?php include '../includes/header.php';?>

<!-- include database connection -->
<?php include '../includes/user_server.php';?>    

<!-- sceleton for page -->
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-10 card_admin_allposts text-left admin_panel">
            <div class="row align-items-center">
                <div class="col-5 col-lg-4">
                    <h3 class="admin_h3">All posts</h3>
                </div>


            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Description</th>

                    </tr>
                </thead>

                <!-- Loops out table with title, date, description from database -->
                <?php

                foreach($userposts as $single_user_post):
                ?>

                <?php echo "<td>" ?><?php echo $single_user_post['title']?><?php echo "</td>"?>
                <?php echo "<td>" ?><?php echo $single_user_post['post_date']?><?php echo "</td>"?>
                <?php echo "<td>" ?>  

                <!-- if string legth is more than 200, show 200 texts -->
                <?php if(strlen($single_user_post['description']) >= 200){
                echo substr($single_user_post['description'],0,200);}

                else {
                    echo $single_user_post['description'];
                }


                ?> 
                <!-- to read more link to single posts -->
                <a href="../views/single_post.php"><p class="readmore">read more</p></a><?php echo "</td>"?>

                <?php echo "</tr>" ?>


                <?php
                endforeach; 
                ?>

            </table>
        </div>
    </div>
</div>

<!-- include Footer-->
<?php include '../includes/footer.php';?> 