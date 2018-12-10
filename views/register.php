<?php
session_start();
?>

<!-- include Head -->
<?php include '../includes/head.php';?>

<?php include '../includes/header.php';?>

<body> 

    <div class="row text-center justify-content-center">

        <div class="col-12 col-md-12 text-center card" style="max-width: 30rem;">

            <form action="../includes/register_server.php" method="POST">
               
                <h2 class="register">Register</h2>
                <?php include '../includes/register_server.php'; ?>

                <label for="login_username">Username</label><br/>

                <input type="text" name="username" placeholder="Username" id="login_username" ><br/>

                <label for="login_password">Password</label><br/>

                <input type="password" name="password" placeholder="Password" id="login_password" ><br/>

                <input type="hidden" name="user_id" id="user_id"><br/>

                <input type="submit" value="Submit" class="btn btn-primary"><br/>
              
            </form>
            
            

        </div>

    </div>

</body> 

<br/>

<!-- include Head -->
<?php include '../includes/footer.php';?> 


