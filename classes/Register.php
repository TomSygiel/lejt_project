<?php

class Register

{

    private $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;

    }
    public function register($username, $password) 
    { 

        try{
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");

            $stmt->execute(     
                [
                    ":username" => $username,
                    ":password" => $hashed_password

                ]);
            return true;
        }
        catch(PDOException $ex){
            die($ex->getMessage());
            return false;
        }

    }



}

$_SESSION["username"] = $_POST["username"]



?>