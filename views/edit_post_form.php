<?php

session_start();

?>

<!--including head-->
<?php include '../includes/head.php';?>

<?php include '../includes/header.php';?>

<body class="edit_post_form_page">

    <!--Blog post form with image file uplad functionality: Tomasz-->

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

                $all_selected_post = $fetch_selected_post_statement->fetchAll(PDO::FETCH_ASSOC);

                foreach ($all_selected_post as $index => $single_post) {

                    if ($index > 0) { ?>

                        <form class="post_form" action="../includes/edit_server.php?post_id=<?php $post_id; ?>" method="POST" enctype="multipart/form-data">
                    
                    <?php

                    //var_dump($post_id);

                    }

                }
                
                ?>

                        <br/>
                        
                        <label for="image"><h4>Update Image</h4></label><br/>
                        <input type="file" name="image" id="image">

                        <label for="blog_title"><h4>Update Title</h4></label><br/>
                        <input type="text" name="title" placeholder="Title" id="blog_title"><br/>

                        <label for="category"><h4>Update Category: </h4></label><br/>

                        <select name="category_select">

                            <option value="Watches">Watches</option>
                            <option value="Sunglasses">Sunglasses</option>
                            <option value="Home accessories">Home accessories</option>

                        </select>

                        <br/>

                        <label for="blog_text"><h4>Update Text</h4></label><br/>
                    
                        <textarea type="text" name="description" placeholder="..." id="text" ></textarea><br/>

                        <input type="hidden" name="user_ID" id="user_ID"><br/>

                        <input name="update" type="submit" value="Update!" class="btn btn-primary blog_submit_button">

                    </form>
            
            </div>
        
        </div>

        <br/>

    </div>

</body> 

<!--include footer-->

<?php include '../includes/footer.php';?> 