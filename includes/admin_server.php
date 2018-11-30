<?php

include ("database_connection.php");
include ("../classes/Admin_posts.php");


/*public function getPosts($sql)
{
    $statement = $this->pdo->prepare($sql);
    $statement->execute();
    while($row = $statement->fetch())
    {
        $dataSet[] = new AdminData($row);

    }

if(!empty($dataSet))
    return $dataSet;

else
    return null;


}*/

$admin = new Admin($pdo);
$admin->admin($posts);


header("location:../views/admin_allposts.php");
?>