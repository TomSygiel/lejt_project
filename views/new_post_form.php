<?php

session_start();

?>

<!--including head-->
<?php include '../includes/head.php';?>

<?php include '../includes/header.php';?>

<body class="blog_form_page">

    <!--Blog post form with image file upload functionality: Tomasz-->

    <div class="row justify-content-center">
        
         <div class="col-12 col-md-12 col-lg-6 card">

            <h2 class="blog_heading">New Blog Post</h2>

                <?php

                //Error handling, checking for empty fields: Tomasz

                include '../includes/new_post_error_handling.php';

                ?>

                <form class="post_form" action="../includes/post_server.php" method="POST" enctype="multipart/form-data">

                    <br/>
                    
                    <label for="image"><h4>Image</h4></label><br/>
                    <input type="file" name="image" id="image">

                    <label for="blog_title"><h4>Title</h4></label><br/>
                    <input type="text" name="title" placeholder="Title" id="blog_title"><br/>

                    <label for="category"><h4>Category: </h4></label><br/>

                    <select name="category_select">

                        <option value="Watches">Watches</option>
                        <option value="Sunglasses">Sunglasses</option>
                        <option value="Home accessories">Home accessories</option>

                    </select>

                    <br/>

                    <label for="blog_text"><h4>Text</h4></label><br/>
                   
                    <textarea type="text" name="description" placeholder="..." id="text" ></textarea><br/>

                    <input type="hidden" name="user_ID" id="user_ID"><br/>

                    <input name="post" type="submit" value="Blog it!" class="btn btn-primary blog_submit_button">

                </form>
            
            </div>
        
        </div>

        <br/>

    </div>

</body> 

<!--include footer-->
<?php include '../includes/footer.php';?> 