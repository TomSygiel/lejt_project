<?php
session_start();
?>


<!-- include Head -->
<?php include '../includes/head.php';?>
<?php include '../includes/header.php';?>
<?php /*include '../classes/Admin_posts.php'*/;?>
<?php include '../includes/admin_server.php';?>


<div class="container">
    <!--
<div class="row">
<div class="col-10">
<button type="button" class="btn admin_allposts_button">New post</button>
</div>
</div>
-->

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

                <?php
                foreach($posts as $key):
                ?>

                <?php echo "<td>" ?><?php echo $key['title']?><?php echo "</td>"?>
                <?php echo "<td>" ?><?php echo $key['post_date']?><?php echo "</td>"?>
                <?php echo "<td>" ?><?php echo $key['created_by']?><?php echo "</td>"?>
                <?php echo "<td>" ?><a href="../views/admin_allposts.php"><i class="fas fa-pen admin_icon"></i></a><?php echo "</td>"?>
                <?php echo "<td>"?><a href="../includes/delete_posts.php?post_id=<?= $key['post_id']; ?>"><i class="fas fa-trash-alt admin_icon"></i></a><?php echo "</td>"?>

                <?php echo "</tr>" ?>
                <?php
                endforeach; 
                ?>

            </tr>
        </tbody>
    </table>
</div>

</div>
</div>

        <?php /*print_r($posts); */?>
            </div>
        </div>
        
        <!-- include Footer--!>
<?php include '../includes/footer.php';?> 