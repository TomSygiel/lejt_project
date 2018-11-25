<?php

class blog() {

    function __constructor() {

        include '../includes/database_connection.php';

    }

    function blogPost() { 

        if (!empty($title) && !empty($description)){

            $statement = $this->prepare("SELECT FROM posts WHERE title=? AND description=?");
            $statement->execute();
        }

        if (empty($title) && empty($description)) {

            header('Location: ../login_and_registration.php?error=empty');
            exit();
            
        } 
        
        if (empty($title)) {
        
            header('Location: ../login_and_registration.php?error=notitle');
            exit();
            
        } 
        
        if (empty($description)) {
        
            header('Location: ../login_and_registration.php?error=nodescription');
            exit();

        $statement = $this->prepare("INSERT INTO posts (title, description) VALUES (:title, :description)");

    }


}



?>