<?php include "header.php";?>




    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

         
<?php 
$sqlw = "SELECT * FROM tbl_food";
$resultw = $conn->query($sqlw);
if ($resultw->num_rows > 0) {
while($roww = $resultw->fetch_assoc()) {
?>
<div class="food-menu-box">
<div class="food-menu-img">
<img style="height: 100px;" src="admin/<?php echo $roww["image_name"] ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
</div>

<div class="food-menu-desc">
<h4><?php echo $roww["title"]; ?></h4>
<p class="food-price">$<?php echo $roww["price"]; ?></p>
<p class="food-detail">
<?php echo $roww["description"]; ?>
</p>
<br>

</div>
</div>

<?php }} ?>
      


            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php include "footer.php"; ?>