<?php
include ("../includes/database_connection.php");

//data base connection
/*$pdo = new PDO(
    "mysql:host=localhost:8889;dbname=millhouse;charset=utf8",
    "root", //user
    "root"  //passwordm
);*/


//Prepare a SQL-statement


$statement = $pdo->prepare("SELECT * FROM posts");
//Execute it
$statement->execute();
//Fetch every row that it returns. $products is now an Associative array
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
            $stmt = $this->pdo->prepare("SELECT post_id, title, created_by FROM posts");
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


