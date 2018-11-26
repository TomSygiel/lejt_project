<?php
session_start();
?>

<!-- include Head -->
<?php include '../includes/head.php';?>



<body> 
    <div class="row text-center justify-content-center">
        <div class="col-12 col-md-12 text-center card" style="max-width: 30rem;">


            <form action="./includes/login.php" method="POST">
                <h2>Login</h2>
                <label for="login_username">username</label><br/>
                <input type="text" name="username" placeholder="username" id="login_username"><br/>
                <label for="login_password">password</label><br/>
                <input type="password" name="password" placeholder="password" id="login_password"><br/>
                <input type="hidden" name="user_ID" id="user_ID"><br/>
                <input type="submit" value="Login" class="btn btn-primary" >
            </form>
        </div>
    </div>


    <p>not a member? <a href="register.php">register here</a></p>

      

</body>  
<?php include '../includes/footer.php';?> 

</Html>
