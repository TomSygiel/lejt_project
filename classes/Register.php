<?php


class Register

{

    private $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;

    }
    /* Method for saving username and hashed password in database */
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
    /* to check for username is already in database */
    public function fetched_user($username) 
    { 

      $statement = $this->pdo->prepare("SELECT * FROM users WHERE username=:username");

        $statement->execute(     
            [
                ":username" => $username

            ]);

        
        return $statement -> fetch();
        
             
    }
    

}



?>

