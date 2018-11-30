<?php
include ("../includes/database_connection.php");



$statement = $pdo->prepare("SELECT * FROM `posts` JOIN users ON posts.post_id = users.user_id");
//Execute it
$statement->execute();
//Fetch every row that it returns. $posts is now an Associative array
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

/*class Admin
{
    private $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;

    }


    public function admin($posts) 
    {
        $statement = $this->pdo->prepare("SELECT title FROM posts");
        //Execute it
        $statement->execute();
        //Fetch every row that it returns. $posts is now an Associative array
        
        return true;       


    }



}







/*$statement = $this->pdo->prepare("SELECT title FROM posts");
//Execute it
$statement->execute();
//Fetch every row that it returns. $posts is now an Associative array
$posts = $this->statement->fetchAll(PDO::FETCH_ASSOC);
return true;       
}  


}   */       
/*print_r($admin);// check that I have the associative array
/* $stmt = $this->pdo->prepare("SELECT * FROM posts");
            $stmt->execute();
            $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return true;
        }

        catch(PDOException $ex){
            die($ex->getMessage());
            return false;

        } 
    }

}

*/


?>


