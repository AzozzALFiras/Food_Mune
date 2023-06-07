<?php 
include "header.php";
?>
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

    <?php include "footer.php"; ?>