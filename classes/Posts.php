<?php 

class Post {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

//Remove post from database
public function deletePostAndComments() {

    if(isset($_GET['post_id'])) {
        $statement_to_delete_comments = $this->pdo->prepare("DELETE FROM comments WHERE post_id = :post_id");
        $statement_to_delete_comments->execute(
            [
                ":post_id" => $_GET["post_id"]
            ]
        );

        $statement_to_delete_post = $this->pdo->prepare("DELETE FROM posts WHERE post_id = :post_id");
        $statement_to_delete_post->execute(
            [
                ":post_id" => $_GET["post_id"]
            ]
        );
    
    }

    return true;

}

//Edit post

    public function editPost($title, $description, $post_id) {

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
                    return true;

             } 
        
        }
    }
    
//Create new post with error handling

    public function blogPost($new_location, $title, $description, $created_by, $category, $post_date, $upload_ok) {

        if (empty($title) && empty($description)) {

            header('Location: ../views/new_post_form.php?error=empty&category='.$category);
            exit();
            
        } 
        
        if (empty($title)) {
        
            header('Location: ../views/new_post_form.php?error=notitle&description='.$description.'&category='.$category);
            exit();
            
        } 
        
        if (empty($description)) {
        
            header('Location: ../views/new_post_form.php?error=nodescription&title='.$title.'&category='.$category);
            exit();

        } 
        
        if (empty($category)) {
        
            header('Location: ../views/new_post_form.php?error=nocategory&title='.$title.'&description='.$description);
            exit();
            
        } 
        
        if (isset($_POST["post"])) {
            $title = strip_tags($_POST["title"]);
            $description = strip_tags($_POST["description"]);

            if ($upload_ok && !empty($title) && !empty($description)) {
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
