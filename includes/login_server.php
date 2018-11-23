<?php
session_start();


include ("database_connection.php");
// Same value in both $_POST["username"] and $username
$username = $_POST["username"];
$password = $_POST["password"];
$user_ID = $_POST["user_ID"];

// No whitespace between $pdo and prepare
$statement = $pdo->prepare("SELECT * FROM users
  WHERE username = :username");
// No whitespace between $pdo and prepare
// Execute populates the statement and runs it
$statement->execute(
    [
        ":username" => $username,
    ]
);

// When select is used, fetch must happen
$fetched_user = $statement->fetch();
$_SESSION["user_ID"] = $fetched_user["user_ID"];
$_SESSION["bought_by"] = $fetched_user["user_ID"];

// 3. Compare
$is_password_correct = password_verify($password, $fetched_user["password"]);

if($is_password_correct){
    // Save user globally to session
    $_SESSION["username"] = $fetched_user["username"];
    // Go back to frontpage
    header('Location: ../views/productlist.php');

} else {
    echo "<h2>check your id and password</h2>";
    // Handle errors, go back to index page
    header('refresh:1; url=../index.php');
}

?>











