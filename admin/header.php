<?php  include("../config.php");


session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["Login3zoz"]) || $_SESSION["Login3zoz"] !== true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title><?php echo $title; ?></title>

<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
<div class="sidebar-brand-icon rotate-n-15">
<i class="fas fa-laugh-wink"></i>
</div>
<div class="sidebar-brand-text mx-3"><?php echo $title; ?></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
<a class="nav-link" href="index.php">
<i class="fas fa-fw fa-inbox"></i>
<span>home</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
Category Manager
</div>

<li class="nav-item">
<a class="nav-link" href="Add_Category.php">
<i class="fas fa-fw fa-plus-square"></i>
<span>Add Category</span></a>
</li>

<li class="nav-item">
<a class="nav-link" href="Categorys.php">
<i class="fas fa-fw fa-plus-square"></i>
<span>Categories</span></a>
</li>








<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
Food Manager
</div>

<li class="nav-item">
<a class="nav-link" href="Add_Food.php">
<i class="fas fa-fw fa-comments"></i>
<span>Add Food</span></a>
</li>

<li class="nav-item">
<a class="nav-link" href="All_Food.php">
<i class="fas fa-fw fa-plus"></i>
<span>All Food</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Heading -->
<div class="sidebar-heading">
Users Manager
</div>

<li class="nav-item">
<a class="nav-link" href="Add_Users.php">
<i class="fas fa-fw fa-user-plus"></i>
<span>Add Users</span></a>
</li>

<li class="nav-item">
<a class="nav-link" href="All_Users.php">
<i class="fas fa-fw fa-users"></i>
<span>All Users</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">



<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
<button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>



</ul>
<!-- End of Sidebar -->