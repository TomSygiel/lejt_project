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

                 <form class="post_form" action="../includes/edit_post_server.php?post_id=$post_id" method="POST" enctype="multipart/form-data">

                    <br/>

                    <!--<label for="image"><h4>Image</h4></label><br/>
                    <input type="file" name="image" value="<!?= //$selected_post["image"]; ?>" id="image">-->

                    <label for="blog_title"><h4>Title</h4></label><br/>
                    <input type="text" name="title" value="<?= $selected_post["title"]; ?>" id="blog_title"><br/>

                    <label for="category"><h4>Category: </h4></label><br/>

                    <!--<select name="category_select">

                        <option value="Watches">Watches</option>
                        <option value="Sunglasses">Sunglasses</option>
                        <option value="Home accessories">Home accessories</option>

                    </select>-->

                    <br/>

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


<!--
echo "<form class='post_form' action='../includes/edit_server.php?post_id=$post_id' method='POST' enctype='multipart/form-data'>";

echo "<br/>";
    
    echo "<label for='image'><h4>Update Image</h4></label><br/>";
    echo "<input type='file' name='image' id='image'>";

    echo "<label for='blog_title'><h4>Update Title</h4></label><br/>";
    echo "<input type='text' name='title' placeholder='Title' id='blog_title'><br/>";

    echo "<label for='category'><h4>Update Category: </h4></label><br/>";

    echo "<select name='category_select'>";

        echo "<option value='Watches'>Watches</option>";
        echo "<option value='Sunglasses'>Sunglasses</option>";
        echo "<option value='Home accessories'>Home accessories</option>";

    echo "</select>";

    echo "<br/>";

    echo "<label for='blog_text'><h4>Update Text</h4></label><br/>";

    echo "<textarea type='text' name='description' id='text' ></textarea><br/>";

    echo "<input type='hidden' name='user_ID' id='user_ID'><br/>";

    echo "<input name='update' type='submit' value='Update!' class='btn btn-primary blog_submit_button'>";

echo "</form>";

-->