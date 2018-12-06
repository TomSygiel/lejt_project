<?php
session_start();
?>

<!-- include Head -->
<?php include '../includes/head.php';?>

<!-- include Header -->
<?php include '../includes/header.php';?>

<?php /*include '../classes/Admin_posts.php'*/;?>

<!-- include database connection -->
<?php include '../includes/admin_server.php';?>

<!-- sceleton for page -->
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-10 card_admin_allposts text-left admin_panel">
            <div class="row align-items-center">
                <div class="col-5 col-lg-4">
                    <h3 class="admin_h3">Admin panel</h3>
                </div>
    
                <div class="col-5 col-lg-6">
                    <a href="new_post_form.php"class="btn btn-sm admin_allposts_button">New post</a>
                </div>
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Created by</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <!-- Loops out table with title, date, created by, edit link and delete link -->
                <?php
                foreach($admin as $single_admin):
                ?>

                <?php echo "<td>" ?><?php echo $single_admin['title']?><?php echo "</td>"?>
                <?php echo "<td>" ?><?php echo $single_admin['post_date'] ?><?php echo "</td>"?>
                <?php echo "<td>" ?><?php echo $single_admin['created_by']?><?php echo "</td>"?>
                <?php echo "<td>" ?><a href="../views/edit_post_form.php?post_id=<?php $post_id; ?>"><i class="fas fa-pen admin_icon"></i></a><?php echo "</td>"?>
                <?php echo "<td>"?><a href="../includes/delete_posts.php?post_id=<?= $single_admin['post_id']; ?>"><i class="fas fa-trash-alt admin_icon"></i></a><?php echo "</td>"?>

                <?php echo "</tr>" ?>
                
                
                <?php
                endforeach; 
                ?>
               
            </table>
        </div>
    </div>
</div>

<!-- include Footer-->
<?php include '../includes/footer.php';?> 