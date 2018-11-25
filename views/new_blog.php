<?php
session_start();

?>

<!--including head-->
<?php include '../includes/head.php';?>

<body>

    <div class="row text-center justify-content-center">
        
            <div class="col-12 col-md-12 text-center card">

                <form action="./includes/login.php" method="POST">
                    
                    <h2>New Blog Post</h2>

                    <label for="blog_title">Title</label><br/>
                    <input type="text" name="title" placeholder="Title" id="blog_title"><br/>

                    <label for="blog_text">Text</label><br/>
                    <input type="text" name="blog_text" placeholder="..." id="blog_text"><br/>

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