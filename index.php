<?php
session_start();

// If not admin redirect to user index
if(isset($_SESSION["admin"]) && ($_SESSION["admin"]) == 0){
    header('Location: /includes/user_firstpage.php');
}

// If not logged in redirect to login page
if(!isset($_SESSION["username"])){
    header('Location: views/login.php');
}

// Include Head
include ("includes/head.php");

// Include Header
include ("includes/header.php");

// Fetch selected posts from database
include ("includes/index_server.php")

//check if correct array is returned
//highlight_string("<?php =\n" . var_export($all_posts, true) . "\n")
?>

<body>

<!--Index structure: Linda-->
<div class="container blog_post_window">
 

        <?php
        //Loops through associative array
        foreach($all_posts as $i => $i_array) {
            
            //Check value of variable i. If 0 echo main blog post.
            if($i === 0){?>

            <div class="row">
                <div class="col-12 main_post_wrapper">
                    <div class="main_picture_frame">
                        <img class="main_picture" src="includes/<?= $i_array['image']; ?>">
                    </div>
                    <div class="post_content">
                        <div class="post_inner">
                            <h1 class="h1_index"><?= $i_array['title']; ?></h1>
                            <div class="index_italic"><?= $i_array['post_date']; ?></div>
                            <div class="index_bold"><?= $i_array['category']; ?></div>

                            <!-- Description: if string legth is 70 characters or more, show only 70 characters -->
                            <?php if(strlen($i_array['description']) >= 70){
                                echo '<div>' .  substr($i_array["description"],0,70) . ' ...</div>';
                                }
                                else {
                                    echo '<div>' . $i_array["description"] . '</div>';
                                }?>
                                
                            <!-- Read more tag -->
                            <div class="index_readmore">
                                <a href="views/single_post.php?post_id=<?= $i_array['post_id'];?>">Read blog post</a>
                            </div>
                            
                            <!-- Link with post_id to single post page with comments -->
                            <div>
                                <a href="views/single_post.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon far fa-comments"></i></a>
                            </div>
                        </div>

                        <!-- Link with post_id to edit post -->
                        <div class="post_share_left">
                            <a href="views/edit_post_form.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon fas fa-pen"></i></a>
                        </div>

                        <!-- Link with post_id to delete post -->
                        <div class="post_share_right">
                            <a href="includes/delete_posts_index.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                </div>
 
            <?php
            //If value not 0 echo secondary posts.
            }else{?>
            
                <div class="col-12 col-lg-6 small_post_wrapper">
                    <div class="secondary_picture_frame">
                        <img class="secondary_picture" src="includes/<?= $i_array['image']; ?>">
                    </div>
                    <div class="small_post_content">
                        <div class="small_post_inner">
                            <h1 class="h2_index"><?= $i_array['title']; ?></h1>
                            <div class="index_italic"><?= $i_array['post_date']; ?></div>
                            <div class="index_bold"><?= $i_array['category']; ?></div>

                            <!-- Description: if string legth is 20 characters or more, show only 20 characters -->
                            <?php if(strlen($i_array['description']) >= 20){
                                echo '<div>' .  substr($i_array["description"],0,20) . ' ...</div>';
                                }
                                else {
                                    echo '<div>' . $i_array["description"] . '</div>';
                                }?>

                            <!-- Read more tag -->
                            <div class="index_readmore">
                                <a href="views/single_post.php?post_id=<?= $i_array['post_id'];?>">Read blog post</a>
                            </div>

                            <!-- Comments on small screens - Link with post_id to single post page with comments -->
                            <div class="d-lg-none">
                                <a href="views/single_post.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon_comment far fa-comments"></i></a>
                            </div>

                            <!-- Icons on lg screen -->
                            <div class="d-none d-lg-flex row justify-content-center">
                                <!-- Link with post_id to edit post on lg screens -->    
                                <div class="col-lg-3 d-none d-lg-block">
                                    <a href="views/edit_post_form.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon_comment fas fa-pen"></i></a>
                                </div>
                                
                                <!-- Link with post_id to delete post on lg screens -->
                                <div class="col-lg-3 d-none d-lg-block">
                                    <a href="includes/delete_posts_index.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon_comment fas fa-trash-alt"></i></a>
                                </div>

                                <!-- Link with post_id to single post page with comments -->
                                <div class="col-lg-3 d-lg-block">
                                    <a href="views/single_post.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon_comment far fa-comments"></i></a>
                                </div>
                            </div>
                        
                            <!-- Link with post_id to edit post on small screens-->
                            <div class="d-lg-none post_share_left">
                                <a href="views/edit_post_form.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon fas fa-pen"></i></a>
                            </div>

                            <!-- Link with post_id to delete post on small screens -->
                            <div class="d-lg-none post_share_right">
                                <a href="includes/delete_posts_index.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
                }
            }
            ?>

            </div>
            <div class="index_readall_link">
            <i class="fab fa-readme"></i><a href="/views/admin_allposts.php"> READ ALL POSTS</a>
            </div>  
        </div>
    <br/>


<!-- include Footer -->
<?php include ("includes/footer.php");?>