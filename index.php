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

            $fetch_all_posts_statement = $pdo->prepare("SELECT * FROM `posts` ORDER BY post_date DESC LIMIT 3");
            $fetch_all_posts_statement->execute();
            $all_posts = $fetch_all_posts_statement->fetchAll(PDO::FETCH_ASSOC);  

            foreach($all_posts as $single_post){ ?>
                <div>
                    <?= $single_post["title"]; ?>
                </div>

                <div>
                    <?php

                    echo '<img src="includes/'. $single_post["image"] . '" > ';

                    ?>
                    <div>
                        <?= $single_post["description"]; ?>
                    </div>

                    <div>
                        <?= $single_post["category"]; ?>
                    </div>

                </div>
                <br/>

            <?php
            }
            ?>

        </div>

    </div>

</div>

<!-- include Footer -->
<?php include 'includes/footer.php';?>