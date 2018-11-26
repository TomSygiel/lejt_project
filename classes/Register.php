<?php

require '../includes/db.php';


/*class login
{


    private $database;
    function __construct($pdo)
    {
        $this->database = $pdo;
    }
    public function register($username, $password) 
    { 

        try{
            $stmt = $this->database->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");

            $stmt->excute(     
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
*/


/*class User{
    private $db;

    public function __construct(){
        $this->db = new Connection();
        $this->db = $this->db->dbConnect();

    }
     public function Login($username, $password){
         if(!empty($username)&&!empty($password)         if(!empty($username)&&!empty($password){
             $stmt = $this->db->prepare()
{

         }

}
*/


/*class Crud extends Connection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getData($query)
    {        
        $result = $this->connection->query($query);

        if ($result == false) {
            return false;
        } 

        $rows = array();

        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function execute($query) 
    {
        $result = $this->connection->query($query);

        if ($result == false) {
            echo 'Error: cannot execute the command';
            return false;
        } else {
            return true;
        }        
    }

    public function insert($username, $password) 
    { 
        $query = "INSERT INTO users
  (username, password) VALUES (:username, :password)";

        $result = $this->connection->query($query);

        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }

    public function escape_string($value)
    {
        return $this->connection->real_escape_string($value);
    }
}
?>






try

{

    $database = new Connection();

    $db = $database->OpenConnection();

    // inserting data into create table using prepare statement to prevent from sql injections

    $stmt = $db->prepare("INSERT INTO users
  (username, password) VALUES (:username, :password)") ;

    // inserting a record

   $stmt->execute(
                [
                    ":username" => $username,
                    ":password" => $hashed_password

                ]
            );

    echo "New record created successfully";

}

catch (PDOException $e)

{

    echo "There is some problem in connection: " . $e->getMessage();

}


*/


class USER
{
    public $conn;

    public function __construct(){
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;

    }

    public function runQuery($sql){
        $stmt = $this->conn->prepare($sql);
        return $stmt;

    }

    public function register($username, $password){

        try{
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");


            /*$stmt->bindparam(":username",$username);
            $stmt->bindparam(":password",$hashed_password);*/

            $stmt->execute(
                                    [
                        ":username" => $username,
                        ":password" => $hashed_password

                    ]);


                    return $stmt;

                    }catch(PDOExeception $e){
                        echo "There is some problem in connection: " .$e->getMessage();
                    }
               }
}
                    


                    /*public function dologin($username, $password)
    {
        try
        {
            $stmt = $this->conn->prepare("SELECT*FROM users WHERE username = :username OR password = :password");
            $stmt ->execute(array(":username=>$username, :password=>$password"));
            $userRow=$stmt->fetch(PDO::FETCH_OBJ);

            if($stmt->rowCount()==1){

                if(password_verify($password, $userRow->password)){

                    $_SESSION['username'] = $userRow->user_id;
                    return true;
                }else{
                    return flase;
                }
            }
        }catch(PDOException $e){
            echo $e->getMessage();

        }
    }

    public function isLoggedIn(){
        if(iseet($_SESSION['username'])){
            return true;
        }
    }
    public function redirect($url){
        header("location:$url");

    }

    public function doLogout(){
        session_destroy();
        unset($_SESSION['username']);
        return true;
    }*/

?>