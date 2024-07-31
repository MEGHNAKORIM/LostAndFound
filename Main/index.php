<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.php');
    exit;
}

echo 'Welcome ' . $_SESSION['username'] . '!';



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard Lost-and-found</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body >

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href=" index.php" class="logo d-flex align-items-center">
        <img src="../ favicon.png" alt="">
        <span class="d-none d-lg-block">Lost and found</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

       

         

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>My Team</h6>
              <span>Web Designers</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="message.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="message.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href=" logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href=" index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="manage_addcategory.html">
              <i class="bi bi-circle"></i><span>+ ADD new</span>
            </a>
          </li>
          <li>
            <a href="categories_list.php">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Items</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="item1_add.php">
              <i class="bi bi-circle"></i><span>+ ADD new</span>
            </a>
          </li>
          <li>
            <a href="item_list.php">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
        </ul>
      </li><!-- End Forms Nav -->

       <!-- End Tables Nav -->

      

      </li><!-- End Icons Nav -->

      <li class="nav-heading">Maintenance</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="message.php">
          <i class="bi bi-person"></i>
          <span>Messages</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="add_user.php">
          <i class="bi bi-question-circle"></i>
          <span>Users</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="contactinfo.php">
          <i class="bi bi-envelope"></i>
          <span>Contact Information</span>
        </a>
      </li><!-- End Contact Page Nav -->

     

   <!-- End Error 404 Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href=" index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="pagetitle"></div>
    <div id="msg-container"> </div>
    <section class="section dashboard container">
      <div class="row "> 
<!-- Left side columns -->
<div class="d-flex flex-row justify-content-center">
<div class="  ">
<div class="card info-card col-md-3" style="height:180px;width:150px"> 
<div class="card-body">
<h5 class="card-title">Categories<span> Active</span>
</h5>
<div class="d-flex align-items-center justify-content-between"> 
<div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-success bg-opacity-25 text-success"> 
<i class="bi bi-menu-button-wide">
</i>
</div>
<div class="ps-3">
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "user-registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve count of categories with status = 1
$sql = "SELECT COUNT(*) AS category_count FROM category_list WHERE status = 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<h6> " . $row["category_count"]."</h6>";
  }
} else {
  echo "0";
}

$conn->close();
?>
</div>
</div>
</div>
</div>
<div class=" col-md-3">
<div class="card info-card col-md-3" style="height:180px;width:150px"> 
  <div class="card-body">
  <h5 class="card-title">Categories<span> Inactive</span>
  </h5>
  <div class="d-flex align-items-center justify-content-between"> 
  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-success bg-opacity-25 text-success"> 
  <i class="bi bi-menu-button-wide">
  </i>
  </div>
  <div class="ps-3">
  <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "user-registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve count of categories with status = 1
$sql = "SELECT COUNT(*) AS category_count FROM category_list WHERE status = 0";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<h6> " . $row["category_count"]."</h6>";
  }
} else {
  echo "0";
}

$conn->close();
?>

  </div>
  </div>
  </div>
</div>
<div class="">
<div class="card info-card col-md-3" style="height:180px;width:150px"> 
  <div class="card-body">
  <h5 class="card-title">Items</span>
  </h5>
  <div class="d-flex align-items-center justify-content-between"> 
  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-success bg-opacity-25 text-success"> 
  <i class="bi bi-question-octagon">
  </i>
  </div>
  <div class="ps-3">
  <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "user-registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve count of categories with status = 1
$sql = "SELECT COUNT(*) AS category_count FROM item_list";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<h6> " . $row["category_count"]."</h6>";
  }
} else {
  echo "0";
}

$conn->close();
?>
  </div>
  </div>
  </div>
</div>
</div>



  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
      <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>MSB</span></strong>. All Rights Reserved
    </div>
    
  </footer>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<a href="logout.php">Logout</a>
