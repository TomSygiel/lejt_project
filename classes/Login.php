<?php
class Login
{
    $username = $_POST["username"];
    $password = $_POST["password"];



    private $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;

    }
    public function login($username, $password) 
    { 

        try{
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->pdo->prepare("SELECT * FROM users
  WHERE username = :username");

            $stmt->execute(     
                [
                    ":username" => $username

                ]);
            return true;
        }
        catch(PDOException $ex){
            die($ex->getMessage());
            return false;
        }

    }

}





?>