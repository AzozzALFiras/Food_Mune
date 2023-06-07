<?php include "header.php"; ?>



<!-- CAtegories Section Starts Here -->
<section class="categories">
<div class="container">
<h2 class="text-center">Explore Foods</h2>

<?php 
$sql = "SELECT * FROM tbl_category";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
?>

<a href="Category.php?id=<?php echo $row["id"]; ?>">
<div class="box-3 float-container">
<img src="admin/<?php  echo $row["image_name"] ?>" alt="Pizza" class="img-responsive img-curve">

<h3 class="float-text text-white"><?php echo $row["title"]; ?></h3>
</div>
</a>


<?php } } ?>

<div class="clearfix"></div>
</div>
</section>
<!-- Categories Section Ends Here -->

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