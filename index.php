<?php
session_start();

if(!isset($_SESSION["username"])){
    header('Location: views/login.php');
}

// Include Head
include ("includes/head.php");

// Include Header
include ("includes/header.php");

// Include database connection
include ("includes/database_connection.php");

// Fetch selected posts from database
$fetch_all_posts_statement = $pdo->prepare("SELECT * FROM `posts` ORDER BY post_id DESC LIMIT 3");
$fetch_all_posts_statement->execute();
$all_posts = $fetch_all_posts_statement->fetchAll(PDO::FETCH_ASSOC);

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
                            <div><?= $i_array['post_date']; ?></div>
                            <div><?= $i_array['category']; ?></div>

                            <!-- if string legth is 70 characters or more, show only 70 characters -->
                            <?php if(strlen($i_array['description']) >= 70){
                                echo substr($i_array['description'],0,70);
                                echo "<a href='/views/single_post.php'><p class='index_readmore'>Read more</p></a>";
                                }
                                else {
                                    echo $i_array['description'];
                                }?>
                            
                            <!-- Link with post_id to single post page with comments -->
                            <a href="views/single_post.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon far fa-comments"></i>
                        </div>
                        <div>
                            <!-- Link with post_id to edit post -->
                            <a href="views/edit_post_form.php?post_id=<?= $i_array['post_id'];?>"><i class="post_share_left mainpic_icon fas fa-pen"></i>
                        </div>
                        <div>
                            <!-- Link with post_id to delete post -->
                            <a href="includes/delete_posts_index.php?post_id=<?= $i_array['post_id'];?>"><i class="post_share_right mainpic_icon fas fa-trash-alt"></i>
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
                            <div><?= $i_array['post_date']; ?></div>
                            <div><?= $i_array['category']; ?></div>

                            <!-- if string legth is 20 characters or more, show only 20 characters -->
                            <?php if(strlen($i_array['description']) >= 20){
                                echo substr($i_array['description'],0,20);
                                echo "<a href='/views/single_post.php'><p class='index_readmore'>Read more</p></a>";
                                }
                                else {
                                    echo $i_array['description'];
                                }?>

                            <div class="d-none d-lg-block small_post_share_left">
                                <i class="secondarypic_icon fas fa-pen"></i>
                            </div>
                            <div class="d-none d-lg-block small_post_share_right">
                                <i class="secondarypic_icon fas fa-trash-alt"></i>
                            </div>
                            <div class="d-lg-none post_share_left">
                                <i class="mainpic_icon fas fa-pen"></i>
                            </div>
                            <div class="d-lg-none post_share_right">
                                <i class="mainpic_icon fas fa-trash-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
                }
            }
            ?>

        </div>
    <br/>     
</div>

<!-- include Footer -->
<?php include ("includes/footer.php");?>