<?php

class Login
{
    private $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;

    }
    /* Method for check username and password in database. */
    public function login($username) 
    { 

        $username = $_POST["username"];
        $password = $_POST["password"];

        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = :username");

        $stmt->execute(
            [
                ":username" => $username
            ]
        );
        $fetched_user = $stmt->fetch();

        $is_password_correct = password_verify($password, $fetched_user["password"]);
        
        /* error handling for matching username and password */
        if($is_password_correct){

            $_SESSION["username"] = $fetched_user["username"];
            $_SESSION["user_id"] = $fetched_user["user_id"];
            $_SESSION["admin"] = $fetched_user["admin"];

            $is_password_correct = password_verify($password, $fetched_user["password"]);

            return true;
            header("location:../index.php");

        } 
        
        /* error handling for empty in username form or password form*/
        elseif(empty($username) || empty($password)) {

            header('Location: ../views/login.php?error=empty');
            exit();
            
        } 
        
        else{
                    /* Redirect to login.php with error massage */
            header ('Location: ../views/login.php?error=login_failed');
            
        }
    }
}




