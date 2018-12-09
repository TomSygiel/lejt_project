<?php
session_start();

// Include Head
include ("head.php");

// Include Header
include ("header.php");

// Fetch selected posts from database
include ("index_user_server.php")
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
                        <img class="main_picture" src="<?= $i_array['image']; ?>">
                    </div>
                    <div class="post_content">
                        <div class="post_inner">
                            <h1 class="h1_index"><?= $i_array['title']; ?></h1>
                            <div><?= $i_array['post_date']; ?></div>
                            <div><?= $i_array['category']; ?></div>

                            <!-- Description: if string legth is 70 characters or more, show only 70 characters -->
                            <?php if(strlen($i_array['description']) >= 70){
                                echo '<div>' .  substr($i_array["description"],0,70) . '</div>';
                                }
                                else {
                                    echo '<div>' . $i_array["description"] . '</div>';
                                }?>
                            
                            <!-- Read more tag -->
                            <div class="index_readmore">
                                <a href="../views/single_post.php?post_id=<?= $i_array['post_id'];?>">Read blog post</a>
                            </div>
                        </div>

                        <!-- Link with post_id to edit post -->
                        <div class="post_share_left">
                            <a href="../views/single_post.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon fas fa-book-open"></i></a>
                        </div>

                        <!-- Link with post_id to delete post -->
                        <div class="post_share_right">
                            <a href="../views/single_post.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon far fa-comments"></i></a>
                        </div>
                    </div>
                </div>
 
            <?php
            //If value not 0 echo secondary posts.
            }else{?>
            
                <div class="col-12 col-lg-6 small_post_wrapper">
                    <div class="secondary_picture_frame">
                        <img class="secondary_picture" src="<?= $i_array['image']; ?>">
                    </div>
                    <div class="small_post_content">
                        <div class="small_post_inner">
                            <h1 class="h2_index"><?= $i_array['title']; ?></h1>
                            <div><?= $i_array['post_date']; ?></div>
                            <div><?= $i_array['category']; ?></div>

                            <!-- Description: if string legth is 20 characters or more, show only 20 characters -->
                            <?php if(strlen($i_array['description']) >= 20){
                                echo '<div>' .  substr($i_array["description"],0,20) . '</div>';
                                }
                                else {
                                    echo '<div>' . $i_array["description"] . '</div>';
                                }?>
                            
                            <!-- Read more tag -->
                            <div class="index_readmore">   
                                <a href="../views/single_post.php?post_id=<?= $i_array['post_id'];?>">Read more</a>
                            </div>

                            <!-- Icons on lg screen -->
                            <div class="d-none d-lg-flex row justify-content-center">
                                <div class="col-lg-3 d-lg-block">
                                <!-- Link with post_id to single post page with comments -->
                                    <a href="../views/single_post.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon_comment far fa-comments"></i></a>
                                </div>
                            </div>
                        
                            <!-- Link with post_id to edit post on small screens-->
                            <div class="d-lg-none post_share_left">
                                <a href="../views/single_post.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon fas fa-book-open"></i></a>
                            </div>

                            <!-- Link with post_id to delete post on small screens -->
                            <div class="d-lg-none post_share_right">
                                <a href="../views/single_post.php?post_id=<?= $i_array['post_id'];?>"><i class="mainpic_icon far fa-comments"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
                }
            }
            ?>

            </div>        
        </div>
    <br/>


<!-- include Footer -->
<?php include ("footer.php");?>