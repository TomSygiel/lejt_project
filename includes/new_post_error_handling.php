<?php
        
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        
if (strpos($fullUrl, "error=empty") == true) {
    echo "<p class='error'>* No blog post to submit!</p>";
    header ('refresh:3;url=../views/new_post_form.php');
    exit();
}

elseif (strpos($fullUrl, "error=notitle") == true) {
    echo "<p class='error'>* Blog title is missing!</p>";
    header ('refresh:3;url=../views/new_post_form.php');
    exit();
}

elseif (strpos($fullUrl, "error=nodescription") == true) {
    echo "<p class='error'>* No blog description!</p>";
    header ('refresh:3;url=../views/new_post_form.php');
    exit();
}

elseif (strpos($fullUrl, "error=nocategory") == true) {
    echo "<p class='error'>* Please select category!</p>";
    header ('refresh:3;url=../views/new_post_form.php');
    exit();
}

elseif (strpos($fullUrl, "error=wrongformat") == true) {
    echo "<p class='error'>* Wrong file format!<br/>Only JPG, JPEG, PNG & GIF files are allowed.</p>";
    header ('refresh:3;url=../views/new_post_form.php');
    exit();
}

elseif (strpos($fullUrl, "error=filetoolarge") == true) {
    echo "<p class='error'>* Selected file is too large!</p>";
    header ('refresh:3;url=../views/new_post_form.php');
    exit();
}

?>