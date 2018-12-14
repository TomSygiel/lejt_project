<?php
session_start();

// Including head and header
require '../includes/head.php';
include '../includes/header.php';
?>

<body> 

    <main class="row text-center justify-content-center">

        <div class="col-12 col-md-12 text-center card" style="max-width: 30rem;">

            <form action="../includes/register_server.php" method="POST">
               
                <h2 class="register">Register</h2>

                <!-- Include error handling for register-->
                <?php include '../includes/error_register.php';?>

                <label for="login_username">Username</label><br/>

                <input type="text" name="username" placeholder="Username" id="login_username" ><br/>

                <label for="login_password">Password</label><br/>

                <input type="password" name="password" placeholder="Password" id="login_password" ><br/>

                <input type="hidden" name="user_id" id="user_id"><br/>

                <input name="registration" type="submit" value="Submit" class="btn btn-primary"><br/>
              
            </form>

        </div>

    </main>

</body> 

<br/>

<!-- Include footer -->
<?php include '../includes/footer.php';?> 


