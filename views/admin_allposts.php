<!-- include Head -->
<?php include '../includes/head.php';?>
<?php include '../includes/header.php';?>

<div class="card text-center">
    <h3>your cart</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Post ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created_by</th>
            </tr>
        </thead>

        <tbody>
            <tr class="table-active">

                <?php
                foreach($cart as $key):
                ?>

                <?php echo "<td>" ?><?php echo $key['product']?><?php echo "</td>"?>
                <?php echo "<td>" ?><?php echo $key['price']." sek"?><?php echo "</td>"?>
                <?php echo "<td>" ?><?php echo $key["quantity"]?><?php echo "</td>"?>
                <?php echo "<td>"?><a href="../includes/remove_product.php?cart_id=<?= $key["cart_id"]; ?>">Remove</a><?php echo "</td>"?>
                <?php echo "</tr>" ?>
                <?php
    endforeach; 
                ?>
            </tr>
    </table>
    <form action=checkout.php method=POST><input class="btn btn-primary" type=submit name="checkout" value="chek out"></form>
</div>








<!-- include Footer -->
<?php include '../includes/footer.php';?> 