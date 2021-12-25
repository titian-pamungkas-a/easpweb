<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "pweb";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if(!$koneksi){
    die("ndak kenek");
}
$name = "";
$nig = "";
$password = "";
$lesson = "";
$kenek = "";

if(isset($_GET['op'])){
  $op = $_GET['op'];
}else{
  $op = "";
}

if($op == 'delete'){
  $nig = $_GET['id'];
  $sql2 = "delete from student where nis = '$nig'";
  $q2 = mysqli_query($koneksi, $sql2);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Student</title>
  <meta content="" name="description">
  <meta content="" name="keywords">



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

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-heading">Pages</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="tables-data2.php">
          <i class="bi bi-person"></i>
          <span>Student</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="tables-data.php">
          <i class="bi bi-person"></i>
          <span>Teacher</span>
        </a>
      </li><!-- End Profile Page Nav -->

    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Student</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
              <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Password</th>
                    <th scope="col">Class</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql1 = "select * from student";
                  $q1 = mysqli_query( $koneksi ,$sql1);
                  $urut = 1;
                  while($r1 = mysqli_fetch_array($q1)){
                    $name = $r1['name'];
                    $nig = $r1['nis'];
                    $password = $r1['password'];
                    $lesson = $r1['class'];?>
                    <tr>
                    <th scope="row"><?php echo $urut++ ?></th>
                    <td><?php echo $name ?></td>
                    <td><?php echo $nig ?></td>
                    <td><?php echo $password ?></td>
                    <td><?php echo $lesson ?></td>
                    <td>
                      <a href="tables-data2.php?op=delete&id=<?php echo $nig ?>" onclick="return confirm('delete data?')"><button type="button" class="btn btn-primary rounded-pill">Delete</button></a>
                      </td>
                  </tr><?php
                  }
                  ?>
                  
              </table>
              <!-- End Table with stripped rows -->
              <a href="studentinput.php"><button type="button" class="btn btn-success rounded-pill">ADD</button></a>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>