<?php

session_start();

?>

<!--including head-->
<?php include '../includes/head.php';?>

<?php include '../includes/header.php';?>

<body class="edit_post_form_page">

    <!--Blog post form with image file upload functionality: Tomasz-->

    <div class="row justify-content-center">
        
         <div class="col-12 col-md-12 col-lg-6 card">

            <h2 class="blog_heading">Edit Blog Post</h2>

                <?php

                $post_id = $_GET["post_id"];

                //Fetch selected post from database

                $fetch_selected_post_statement = $pdo->prepare("SELECT * FROM posts WHERE post_id = :post_id");
                $fetch_selected_post_statement->execute(
                    [
                        ":post_id" => $post_id
                    ]
                );

                $selected_post = $fetch_selected_post_statement->fetch(PDO::FETCH_ASSOC);

                //var_dump($selected_post);

                ?>

                 <form class="post_form" action="../includes/edit_post_server.php?post_id=<?= $post_id ?>" method="POST" enctype="multipart/form-data">

                    <br/>

                    <label for="blog_title"><h4>Title</h4></label><br/>
                    <input type="text" name="title" value="<?= $selected_post["title"]; ?>" id="blog_title"><br/>

                    <label for="blog_text"><h4>Text</h4></label><br/>

                    <textarea type="text" name="description" id="text" ><?= $selected_post["description"]; ?></textarea><br/>

                    <input type="hidden" name="post_id" id="post_id"><br/>

                    <input name="update" type="submit" value="Edit!" class="btn btn-primary blog_submit_button">

                </form>         
            
            </div>
        
        </div>

        <br/>

    </div>

</body> 

<!--include footer-->

<?php include '../includes/footer.php';?> 
