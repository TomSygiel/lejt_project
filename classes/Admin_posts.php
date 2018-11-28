<?php
include ("../includes/database_connection.php");

$statement = $pdo->prepare("SELECT * FROM posts");
//Execute it
$statement->execute();
//Fetch every row that it returns. $posts is now an Associative array
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);



//print_r($products);// check that I have the associative array

/*class Admin
{
    private $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;

    }

    public function posts($post_id, $title, $created_by) 
    { 
        try{
            $stmt = $this->pdo->prepare("SELECT * FROM posts");
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


