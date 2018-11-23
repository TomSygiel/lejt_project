<?php
session_start();
?>

<!-- include Head -->
<?php include '../includes/head.php';?>


<body> 
    <div class="row">
        <div class="col-12 col-md-12 border-primary text-center card" style="max-width: 30rem;">

            <form action="../includes/register_server.php" method="POST">
                <h2>Register</h2>
                <label for="login_username">username</label>
                <input type="text" name="username" placeholder="username" id="login_username">
                <label for="login_password">password</label>
                <input type="password" name="password" placeholder="password" id="login_password">
                <input type="hidden" name="user_ID" id="user_ID">
                <input type="submit" value="submit" class="btn btn-primary" >
            </form>

        </div>
    </div>

        </body> 
    <!-- include Head -->
    <?php include '../includes/footer.php';?> 

    </Html>
