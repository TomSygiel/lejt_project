<?php
session_start();

include '../includes/database_connection.php';


?>

<!--including head-->
<?php include '../includes/head.php';?>

<body>

    <form action="./includes/login.php" method="POST">
        <h2>New Blog Post</h2>
        <label for="blog_title">Title</label><br/>
        <input type="text" name="title" placeholder="Title" id="blog_title"><br/>

        <label for="blog_text">Text</label><br/>
        <input type="password" name="password" placeholder="password" id="login_password"><br/>
        
        <input type="hidden" name="user_ID" id="user_ID"><br/>
        <input type="submit" value="Login" class="btn btn-primary" >
    </form>




</body> 


<!--include footer-->
<?php include '../includes/footer.php';?> 