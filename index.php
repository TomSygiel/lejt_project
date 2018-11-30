<?php
session_start();
?>

<!-- include Head -->
<?php include 'includes/head.php';?>

<!-- include Header -->
<?php include 'includes/header.php';?>

<body>

<div class="container blog_post_window">
    <div class="row">
        <div class="col-12">
<<<<<<< HEAD

            <?php

            require 'includes/database_connection.php';

            $fetch_all_posts_statement = $pdo->prepare("SELECT * FROM posts");
            $fetch_all_posts_statement->execute();
            $all_posts = $fetch_all_posts_statement->fetchAll(PDO::FETCH_ASSOC);  

            foreach($all_posts as $single_post){ ?>
                <div>
                    <?= $single_post["title"]; ?>
                </div>

                <div>
                    <img src="<?= $single_post["image"]; ?>" alt="blog post image">

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



             
=======
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, itaque quia incidunt odio, libero ad ratione maiores corporis id commodi quibusdam laborum recusandae omnis laboriosam aspernatur deleniti perferendis earum voluptatibus!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, itaque quia incidunt odio, libero ad ratione maiores corporis id commodi quibusdam laborum recusandae omnis laboriosam aspernatur deleniti perferendis earum voluptatibus!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, itaque quia incidunt odio, libero ad ratione maiores corporis id commodi quibusdam laborum recusandae omnis laboriosam aspernatur deleniti perferendis earum voluptatibus!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, itaque quia incidunt odio, libero ad ratione maiores corporis id commodi quibusdam laborum recusandae omnis laboriosam aspernatur deleniti perferendis earum voluptatibus!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, itaque quia incidunt odio, libero ad ratione maiores corporis id commodi quibusdam laborum recusandae omnis laboriosam aspernatur deleniti perferendis earum voluptatibus!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, itaque quia incidunt odio, libero ad ratione maiores corporis id commodi quibusdam laborum recusandae omnis laboriosam aspernatur deleniti perferendis earum voluptatibus!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, itaque quia incidunt odio, libero ad ratione maiores corporis id commodi quibusdam laborum recusandae omnis laboriosam aspernatur deleniti perferendis earum voluptatibus!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, itaque quia incidunt odio, libero ad ratione maiores corporis id commodi quibusdam laborum recusandae omnis laboriosam aspernatur deleniti perferendis earum voluptatibus!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, itaque quia incidunt odio, libero ad ratione maiores corporis id commodi quibusdam laborum recusandae omnis laboriosam aspernatur deleniti perferendis earum voluptatibus!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, itaque quia incidunt odio, libero ad ratione maiores corporis id commodi quibusdam laborum recusandae omnis laboriosam aspernatur deleniti perferendis earum voluptatibus!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, itaque quia incidunt odio, libero ad ratione maiores corporis id commodi quibusdam laborum recusandae omnis laboriosam aspernatur deleniti perferendis earum voluptatibus!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, itaque quia incidunt odio, libero ad ratione maiores corporis id commodi quibusdam laborum recusandae omnis laboriosam aspernatur deleniti perferendis earum voluptatibus!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, itaque quia incidunt odio, libero ad ratione maiores corporis id commodi quibusdam laborum recusandae omnis laboriosam aspernatur deleniti perferendis earum voluptatibus!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, itaque quia incidunt odio, libero ad ratione maiores corporis id commodi quibusdam laborum recusandae omnis laboriosam aspernatur deleniti perferendis earum voluptatibus!</p>
>>>>>>> 5063cb3aa2b7ee91594f5227685b1ac5db906211
        </div>

    </div>

</div>


<!-- include Footer -->
<?php include 'includes/footer.php';?>