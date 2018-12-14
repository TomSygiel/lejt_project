<?php
session_start();

// Including head and header
require '../includes/head.php';
include '../includes/header.php';
?>

<body class="edit_post_form_page">

    <div class="row justify-content-center">
        
        <div class="col-10 col-md-8 col-lg-6 card">

            <h2 class="blog_heading">Edit Blog Post</h2>

                <?php

                //Fetch selected post from database
                include '../includes/fetch_post_to_edit.php';

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

</body> 

<!-- Include footer -->
<?php include '../includes/footer.php';?> 
