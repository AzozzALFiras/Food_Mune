<?php
include "header.php";
?>

<?php


$ERROR__ = "";
if(isset($_POST["submit"])){

$title = $_POST["title"];
$description = $_POST["description"];
$price  = $_POST["price"];
$category_id = $_POST["category_id"];
$image = $_FILES["image"];


$ext = array('image/jpg', 'image/jpeg', 'jpg', 'jpeg', 'png','image/png');




$filecsext = strtolower(end(explode('.', $image['type'])));
$PathExt = substr($filecsext, strpos($filecsext, "/") + 1);
$Personal_Array = 'Uploads/' . md5(microtime() .$image['name']).".$PathExt";

 move_uploaded_file($image['tmp_name'], $Personal_Array);




$sql = "INSERT INTO tbl_food (title, description, price, image_name, category_id)
VALUES ('$title', '$description', '$price', '$Personal_Array', '$category_id')";

if ($conn->query($sql) === TRUE) {
$ERROR__ =  "The Food Has Been Added...!";
} else {
$ERROR__ = "Error: " . $sql . "<br>" . $conn->error;
}
}


?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
<i class="fa fa-bars"></i>
</button>



<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

<!-- Nav Item - Search Dropdown (Visible Only XS) -->
<li class="nav-item dropdown no-arrow d-sm-none">
<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-search fa-fw"></i>
</a>
<!-- Dropdown - Messages -->
<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
aria-labelledby="searchDropdown">
<form class="form-inline mr-auto w-100 navbar-search">
<div class="input-group">
<input type="text" class="form-control bg-light border-0 small"
placeholder="Search for..." aria-label="Search"
aria-describedby="basic-addon2">
<div class="input-group-append">
<button class="btn btn-primary" type="button">
<i class="fas fa-search fa-sm"></i>
</button>
</div>
</div>
</form>
</div>
</li>




<div class="topbar-divider d-none d-sm-block"></div>

<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
<img class="img-profile rounded-circle"
src="img/undraw_profile.svg">
</a>
<!-- Dropdown - User Information -->
<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
aria-labelledby="userDropdown">

<a class="dropdown-item" href="#">
<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
Settings
</a>

<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
Logout
</a>
</div>
</li>

</ul>

</nav>
<!-- End of Topbar -->

<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
<div class="card-body p-0">
<!-- Nested Row within Card Body -->
<div class="row">

<div class="col-lg-12">
<div class="p-5">
<div class="text-center">
<h1 class="h4 text-gray-900 mb-4">Add Food! - <?php if(!empty($ERROR__)){
    echo $ERROR__;
} ?></h1></div>
<form class="user" method="POST" enctype="multipart/form-data">

<div class="form-group">
<input type="text" name="title" value="" class="form-control form-control-user"  placeholder="Title">
</div>
<div class="form-group">
<input type="text" name="description" value="" class="form-control form-control-user"  placeholder="Description">
</div>
<div class="form-group">
<input type="text" name="price" value="" class="form-control form-control-user"  placeholder="Price">
</div>

<div class="form-group">
<input type="file" name="image"  class="form-control"  placeholder="Image">
</div>

<div class="form-group">
<select name="category_id" class="form-control" >
<?php 
$sql = "SELECT * FROM tbl_category";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    ?>
  <option value="<?php echo $row["id"] ?>"><?php echo $row["title"]; ?></option>
  <?php } }?>
</select>
</div>




<button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
Add Food
</button>


</form>

</div>
</div>
</div>
</div>
</div>

</div>

</div>
<!-- End of Main Content -->

<?php include "footer.php"; ?>

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
<button class="close" type="button" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
<div class="modal-footer">
<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
<a class="btn btn-primary" href="login.html">Logout</a>
</div>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>
