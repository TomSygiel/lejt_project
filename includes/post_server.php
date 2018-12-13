<?php

session_start();

require 'database_connection.php';
require '../classes/Posts.php';

$image = $_FILES["image"];
$file_size = $_FILES["image"]["size"];
$title = $_POST["title"];
$description = $_POST["description"];
$created_by = $_SESSION["username"];
$category = $_POST["category_select"];
$post_date = date('Y/m/d');

//List of extension allowed to be upploaded: Tomasz

$allowed_file_extension = array("jpg", "jpeg", "png");

$file_format = explode(".", $_FILES["image"]["name"]);

$file_format = strtolower(end($file_format));

//print_r used to capture extension

print_r($file_format);

if (!in_array($file_format, $allowed_file_extension)) {
    header('Location: ../views/new_post_form.php?error=wrongformat');
    exit();
}

//Limit fir file size is set high to allow for high quality images

elseif ($file_size > 2000000) {
    header('Location: ../views/new_post_form.php?error=filetoolarge');
    exit();
}else {

//Moving images to upload file

$temporary_location =  $image["tmp_name"];
$new_location = "uploads/" . $image["name"];
$upload_ok = move_uploaded_file($temporary_location, $new_location);

$posts = new Post($pdo);
$posts->blogPost($new_location, $title, $description, $created_by, $category, $post_date, $upload_ok);

header ('Location: ../index.php?upploadsuccess');

}

?>