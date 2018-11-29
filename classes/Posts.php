<?php 

session_start();

class Post {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function deletePost(){

    }

    public function blogPost($image, $title, $description, $created_by/*, $upload_ok*/) {

        if (empty($title) && empty($description)) {

            header('Location: ../new_post_form.php?error=empty');
            exit();
            
        } if (empty($title)) {
        
            header('Location: ../new_blog.php?error=notitle');
            exit();
            
        } if (empty($description)) {
        
            header('Location: ../new_blog.php?error=nodescription');
            exit();

        }

        if (!empty($title) && !empty($description)/* && $upload_ok*/) {
            $statement = $this->pdo->prepare("INSERT INTO posts (title, description, created_by, image) VALUES(:title, :description, :created_by, :image)");
            $statement->execute(
                    [

                    ":title" => $title,
                    ":description" => $description,
                    ":created_by" => $created_by,
                    ":image" => $image
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
