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
$ndkkenek = "";

if(isset($_POST['addbutton'])){
    $name = $_POST['name'];
    $nig = $_POST['nig'];

    $password = $_POST['nig'];
    $lesson = $_POST['lesson'];
}

if($name && $nig && $password && $lesson){
    $sql1 = "insert into student (name, nis, password, class) values ('$name', '$nig', '$password',  '$lesson')";
    $q1 = mysqli_query($koneksi, $sql1);
    if($q1){
        header("index.html");
    }else{
        $ndkkenek = "ndak kenek";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Insert Student</title>
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

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.php" class="logo d-flex align-items-center w-auto">
                  <span class="d-none d-lg-block">Admin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
                
                
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Insert Student</h5>
                  </div>

                  <form class="row g-3 needs-validation" novalidate method="POST">
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">name</label>
                      <div class="input-group has-validation">
                        <input type="text" name="name" value="<?php echo $name ?>" class="form-control" id="yourName" required>
                        <div class="invalid-feedback">name</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="yourNig" class="form-label">NIS</label>
                      <input type="text" name="nig" value="<?php echo $nig ?>" class="form-control" id="yourNig" required>
                      <div class="invalid-feedback">NIS</div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="kunci" value="<?php echo $password ?>" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">password</div>
                    </div>
                    <div class="col-12">
                      <label for="yourLesson" class="form-label">Class</label>
                      <input type="text" name="lesson" value="<?php echo $lesson ?>" class="form-control" id="yourLesson" required>
                      <div class="invalid-feedback">Class</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Are u sure?</label>
                      </div>
                    </div>
                    <div class="col-12">
                    <a href="tables-data2.php"><button class="btn btn-primary w-100" type="submit" name="addbutton" id="addbutton">ADD</button></a>
                      
                    </div>
                  </form>

                </div>
              </div>


            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

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