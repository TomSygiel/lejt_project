<?php
session_start();
include "../includes/db.php";

if(isset($_POST['submit']))
{
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    if($login->register($username, $password))
    {
        header("location:../index.php");
    }
    
    
    
}
?>

<!-- include Head -->
<?php include '../includes/head.php';?>


<body> 
    <div class="row text-center justify-content-center">
        <div class="col-12 col-md-12 text-center card" style="max-width: 30rem;">

            <form action="../classes/Register.php" method="POST">
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

   
