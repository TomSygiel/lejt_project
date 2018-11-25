<?php
session_start();
?>

<!-- include Head -->
<?php include '../includes/head.php';?>


<body> 
    <div class="row text-center justify-content-center">
        <div class="col-12 col-md-12 border-primary text-center card" style="max-width: 30rem;">

            <form action="../includes/register_server.php" method="POST">
                <h2>Register</h2>
                <label for="login_username">username</label><br/>
                <input type="text" name="username" placeholder="username" id="login_username"><br/>
                <label for="login_password">password</label><br/>
                <input type="password" name="password" placeholder="password" id="login_password"><br/>
                <input type="hidden" name="user_ID" id="user_ID"><br/>
                <input type="submit" value="submit" class="btn btn-primary" ><br/>
            </form>

        </div>
    </div>

        </body> 
    <!-- include Head -->
    <?php include '../includes/footer.php';?> 
