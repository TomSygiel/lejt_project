<?php
session_start();

// Include head, header and database connection
include '../includes/head.php';
include '../includes/header.php';
include '../includes/user_server.php';
?>    

<!-- Skeleton for page -->
<main class="container" id="user_allposts">

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

                    <?= "<td>" . $single_user_post['post_date'] . "</td>" ?>
                    <?= "<td>" . $single_user_post['title'] . "</td>" ?>
                    <?= "<td>" ?>  

                    <!-- If string length is more than 200, show 200 texts -->
                    <?php if(strlen($single_user_post['description']) >= 200){
                    echo substr($single_user_post['description'],0,200);
                    echo ' ... ' ;}
                    else {
                        echo $single_user_post['description'];
                    }
                    ?>

                    <!-- To read more link to single posts -->
                    <p class="index_readmore"><a href="../views/single_post.php?post_id=<?= $single_user_post['post_id'];?>">Read more</a></p><?= "</td>"?>

                    <?= "</tr>" ?>

                    <?php
                    }
                    ?>

            </table>

        </div>

    </div>

</main>

<!-- Include footer -->
<?php include '../includes/footer.php';?> 