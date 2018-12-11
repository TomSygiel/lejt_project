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
<div class="container" id="user_allposts">
    <div class="row align-items-center justify-content-center">
        <div class="col-10 card_admin_allposts text-left admin_panel">
            <div class="row align-items-center">
                <div class="col-5 col-lg-4">
                    <h3 class="admin_h3">All posts</h3>
                </div>


            </div>

            <table class="table table-hover">

                <tr> 
                                     
                    <th class="w-25">Date</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>

                <tr>
                    <!-- Loops out table with title, date, description from database -->
                    <?php

                    foreach($userposts as $single_user_post){
                    ?>


                    <?php echo "<td>" ?><?php echo $single_user_post['post_date']?><?php echo "</td>"?>
                    <?php echo "<td>" ?><?php echo $single_user_post['title']?><?php echo "</td>"?>
                    <?php echo "<td>" ?>  

                    <!-- if string length is more than 200, show 200 texts -->
                    <?php if(strlen($single_user_post['description']) >= 200){
                        echo substr($single_user_post['description'],0,200);
                        echo ' ... ' ;}

                        else {
                            echo $single_user_post['description'];
                        }


                    ?> 
                    <!-- to read more link to single posts -->
                    <p class="index_readmore"><a href="../views/single_post.php?post_id=<?php echo $single_user_post['post_id'];?>">Read more</a></p><?php echo "</td>"?>

                    <?php echo "</tr>" ?>


                    <?php
                    }
                    ?>

            </table>
        </div>
    </div>
</div>

<!-- include Footer-->
<?php include '../includes/footer.php';?> 