<?php 

class Post {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    
    /*public function deletePost() {

    }*/

//Edit post

    public function editPost(/*$title, $description/*, $created_by, $category, $post_date, $post_id*/) {

        $post_id = $_GET["post_id"];
        $title = $_POST["title"];
        $description = $_POST["description"];

        if (isset($_POST["update"])) {
            $title = strip_tags($_POST["title"]);
            $description = strip_tags($_POST["description"]);

            if (!empty($title) && !empty($description)) {
                $statement_to_edit = $this->pdo->prepare("UPDATE posts SET title = :title, description = :description WHERE post_id = :post_id");
                $statement_to_edit->execute(
                    [
                        ":title" => $title,
                        ":description" => $description,
                        ":post_id" => $post_id
                    ]
                );
                    $edit_post = $statement_to_edit;
                    return $edit_post;

             } 
        
        }
    }
    
//Create new post

    public function blogPost($new_location, $title, $description, $created_by, $category, $post_date) {

        if (empty($title) && empty($description)) {

            header('Location: ../views/new_post_form.php?error=empty');
            exit();
            
        } if (empty($title)) {
        
            header('Location: ../views/new_post_form.php?error=notitle');
            exit();
            
        } if (empty($description)) {
        
            header('Location: ../views/new_post_form.php?error=nodescription');
            exit();

        }

        if (isset($_POST["post"])) {
            $title = strip_tags($_POST["title"]);
            $description = strip_tags($_POST["description"]);

            if (!empty($title) && !empty($description)) {
                $statement = $this->pdo->prepare("INSERT INTO posts (title, description, created_by, image, category, post_date) VALUES(:title, :description, :created_by, :image, :category, :post_date)");
                $statement->execute(
                        [
                        ":title" => $title,
                        ":description" => $description,
                        ":created_by" => $created_by,
                        ":image" => $new_location,
                        ":category" => $category,
                        ":post_date" => $post_date
                        ]
                    );

                    return true;

             } 
        
        }

    }

}

?>
