<?php

/*class Connection{
    private $host;
    private $db_name;
    private $username;
    private $password;
    private $charset;

    public function connect(){


    $this->host = "localhost:8889";
    $this->db_name = "millhouse";
    $this->username = "root";
    $this->password = "root";
    $this->charset = "utf8";

        try{

        $dsn = "mysql:host=".$this->host.";dbname=".$this->db_name.$this->username.$this->password. ";charset=".$this->charset;
        $pdo = new PDO($dsn, $this->username, $this->password);
        $pdo->setAttreibute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTOION);
         return $pdo;   

        }catch(PDOException $e){
            echo "Connection failed: ".$e->getMessage();

        }


    }

 }*/

/*class Connection{
    private $host;
    private $db_name;
    private $username;
    private $password;
    private $charset;

    public function connect(){


    $this->host = "localhost:8889";
    $this->db_name = "millhouse";
    $this->username = "root";
    $this->password = "root";
    $this->charset = "utf8";

        try{

        $dsn = "mysql:host=".$this->host.";dbname=".$this->db_name.$this->username.$this->password. ";charset=".$this->charset;
        $pdo = new PDO($dsn);
        $pdo->setAttreibute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTOION);
        
            return $pdo;   

        }catch(PDOException $e){
            echo "Connection failed: ".$e->getMessage();

        }


    }

 }
*/

?>


<?php
/*class Connection{
    private $host = "localhost:8889";
    private $db_name = "millhouse";
    private $username = "root";
    private $password = "root";
    private $charset = "utf8";



    public $conn;

    public function __construct(){



        if(iseet($this->conn)){
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,$this->username,$this->password, "charset=".$this->charset);
            return $this->conn;


            if(!$this->conn){

            echo "Connection error";
        } 


    }

 return $this->conn;
    }
}
*/

class Database{
    private $host = "localhost:8889";
    private $db_name = "millhouse";
    private $username = "root";
    private $password = "root";
    private $charset = "utf8";
    
    public $conn;

    public function dbConnection(){
        
        
        try{
            $this->conn = new PDO("mysql:host=".$this->host.";db_name=".$this->db_name,$this->username,$this->password, "charset=".$this->charset);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $this->conn;

        }catch(PDOException $e){
            echo "Connection error".$e->getMessage();
        } 

return $this->conn;

    }
}

?>