<?php 

session_start();

$image = $_POST["image"];
$title = $_POST["title"];
$description = $_POST["description"];
$created_by = $_SESSION["username"];

$temporary_location = $image["temp_name"];

$new_location = "uploads/" . $image["name"];

$upload_ok = move_upload_file($temporary_location, $new_location);


//Basic structure for posts classes
class Posts
{
  private $pdo;
  /* Inject the pdo connection so it is available inside of the class
   * so we can call it with '$this->pdo', always available inside of the class
   */
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

//
class Post() {

    function blogPost() { 

        if (!empty($title) && !empty($description) && $upload_ok) {

            $statement = $this->prepare("INSERT INTO posts (title, description, created_by, image) VALUES(:title, :description, :created_by, :image)");
            $statement->execute(
                [

                ":title" => $title,
                ":description" => $description,
                ":created_by" => $created_by,
                ":image" => $new_location
                 ]
            );

        } if (empty($title) && empty($description)) {

            header('Location: ../new_blog.php?error=empty');
            exit();
            
        } if (empty($title)) {
        
            header('Location: ../new_blog.php?error=notitle');
            exit();
            
        } if (empty($description)) {
        
            header('Location: ../new_blog.php?error=nodescription');
            exit();

        }

    }

}


?>
