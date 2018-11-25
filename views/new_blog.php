<?php
session_start();

?>

<!--including head-->
<?php include '../includes/head.php';?>

<body>

<?php

//Error handling, checking for empty fields
        
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        
if (strpos($fullUrl, "error=empty") == true) {
    echo "<p class='error'>* No blog post to submit!</p>";
    header ('refresh:5;url=new_blog.php');
    exit();
}

elseif (strpos($fullUrl, "error=notitle") == true) {
    echo "<p class='error'>* Blog title is missing!</p>";
    header ('refresh:5;url=new_blog.php');
    exit();
}

elseif (strpos($fullUrl, "error=nodescription") == true) {
    echo "<p class='error'>* No blog description!</p>";
    header ('refresh:5;url=new_blog.php');
    exit();
}

?>

    <div class="row text-center justify-content-center">
        
            <div class="col-12 col-md-12 text-center card">

                <form action="./includes/new_blog_server.php" method="POST">
                    
                    <h2>New Blog Post</h2>

                    <label for="blog_title">Title</label><br/>
                    <input type="text" name="title" placeholder="Title" id="blog_title"><br/>

                    <label for="blog_text">Text</label><br/>
                    <input type="text" name="description" placeholder="..." id="blog_text"><br/>

                    <label>Category: </label><br/>
                    <select>
                        <option>Watches</option>
                        <option>Sunglasses</option>
                        <option>Home accesories</option>
                    </select>

                    <br/>

                    <input type="hidden" name="user_ID" id="user_ID"><br/>

                    <input type="submit" value="Blog it!" class="btn btn-primary">

                </form>

            </div>
    </div>

</body> 

<!--include footer-->
<?php include '../includes/footer.php';?> 