<?php
session_start();
?>

<!-- include Head -->
<?php include '../includes/head.php';?>
<?php include '../includes/header.php';?>


<body>
   
    <div class="row text-center justify-content-center">
        <div class="col-12 col-md-12 text-center card" style="max-width: 30rem;">


            <form action="../includes/login_server.php" method="POST">
                <h2 class="login">Login</h2>
                <label for="login_username">Username</label><br/>
                <input type="text" name="username" placeholder="username" id="login_username"><br/>
                <label for="login_password">Password</label><br/>
                <input type="password" name="password" placeholder="password" id="login_password"><br/>
                <input type="hidden" name="user_id" id="user_id"><br/>
                <input type="submit" value="Login" class="btn btn-primary" >
            </form>
        </div>
    </div>



    
    <?php if (isset($_SESSION["username"])){ ?>
                       <p>Du är inloggad som <b><?= $_SESSION['username']; ?></b></p>
                       <a href="../views/logout.php">Logga ut</a>

               <?php } ?>
               
               

    <p class="member">Not a member? <a class="register_link" href="register.php">Register here</a></p>


</body>  
<?php include '../includes/footer.php';?> 


