<!-- include Head -->
<?php include '../includes/head.php';?>
<?php include '../includes/header.php';?>
<?php include '../classes/Admin_posts.php';?>


<div class="card text-center">
    <h3>Admin panel</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Created_by</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            <tr class="table-active">

                <?php
                foreach($posts as $key):
                ?>

                <?php echo "<td>" ?><?php echo $key['title']?><?php echo "</td>"?>
                <?php echo "<td>" ?><?php echo $key['created_by']?><?php echo "</td>"?>
                <?php echo "<td>" ?><?php echo $key['created_by']?><?php echo "</td>"?>
                <?php echo "<td>"?><a href="../includes/delete_posts.php?post_id=<?= $key['post_id']; ?>">Remove</a><?php echo "</td>"?>

                <?php echo "</tr>" ?>
                <?php
    endforeach; 
                ?>



            </tr>
    </table>



    <tbody>




    </tbody>
</div>

<?php print_r($posts); ?>

<!-- include Footer -->
<?php include '../includes/footer.php';?> 