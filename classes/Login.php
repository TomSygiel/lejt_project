<?php

class Login
{
    private $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;

    }

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
        
        if($is_password_correct){

            $_SESSION["username"] = $fetched_user["username"];
            $_SESSION["user_id"] = $fetched_user["user_id"];
            $_SESSION["admin"] = $fetched_user["admin"];

            $is_password_correct = password_verify($password, $fetched_user["password"]);

            return true;

        } 
    }
}




