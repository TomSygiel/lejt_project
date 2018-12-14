<?php
session_start();
?>

<!-- include Head -->
<?php 

include '../includes/head.php';

include '../includes/header.php';

?>

<body>

    <br/>
   
    <main class="row text-center justify-content-center login_main">
        
           <div class="col-12 col-md-12 text-center card" style="max-width: 30rem;">
            
               <form action="../includes/login_server.php" method="POST">

               <?php include '../includes/login_error_handling.php'; ?>
               
                <h2 class="login">Login</h2>
                
                <label for="login_username">Username</label><br/>
                
                <input type="text" name="username" placeholder="Username" id="login_username"><br/>
                
                <label for="login_password">Password</label><br/>
                
                <input type="password" name="password" placeholder="Password" id="login_password"><br/>
                
                <input type="hidden" name="user_id" id="user_id"><br/>
                
                <input type="submit" value="Login" class="btn btn-primary">
                
               </form>
               
        </div>
        
    </main>

    <br/>

    <p class="member">Not a member? <a class="register_link" href="register.php">Register here</a></p>

</body> 

<br/>

<?php include '../includes/footer.php';?> 


