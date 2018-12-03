<?php 

session_start();

class Post {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function deletePost(){

    }

    public function blogPost($new_location, $title, $description, $created_by, $category, $post_date/*, $upload_ok*/) {

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

        if (/*$upload_ok && */!empty($title) && !empty($description)) {
            $statement = $this->pdo->prepare("INSERT INTO posts (title, description, created_by, image, category, post_date) VALUES(:title, :description, :created_by, :image, :category)");
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

//Basic structure for posts classes
/*
class Posts
{
  private $pdo;
  /* Inject the pdo connection so it is available inside of the class
   * so we can call it with '$this->pdo', always available inside of the class
   */

   /*
  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function delete()
  {
    return true;
  }
  
  public function create($newPost)
  {
    return true;
  }
}
*/




?>
