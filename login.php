<?php session_start(); ?>
<?php  

  
include_once('config.php');



if (isset($_POST['btnadd'])) {


    $email = $_POST ['email'];


    $password = $_POST ['password'];


$query = "SELECT 'u_name','u_email','u_password' FROM users WHERE u_email ='$email' AND u_password = '$password'";


$results = mysqli_query($con,$query);


$result = mysqli_num_rows($results);


if ($result > 0) {
    
$_SESSION['email'] = $email;

header("location: alltheater.php");

}
else{

$msg = "Invalid Email Or Password";

}
}
 ?>

<center>
    <form action="" method="POST">
        <div class="container">


        <?php 
if (isset($msg)) { ?>

<div class="alert alert-dismissible alert-danger col-lg-4 col-md-4 col-sm-12 my-sm-3">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong><?php echo $msg ?></strong></div>
  


 <?php 
}
 ?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>  Login -</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Assisets_backhand/img/favicon.png" rel="icon">
  <link href="Assisets_backhand/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Assisets_backhand/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Assisets_backhand/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Assisets_backhand/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Assisets_backhand/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="Assisets_backhand/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="Assisets_backhand/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="Assisets_backhand/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Assisets_backhand/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <div class="logo d-flex align-items-center w-auto">
                  <img src="AssISets_backhand/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Online Movie Booking</span>
                </div>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your email & password to login</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="email" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your email.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <br>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <br>
                    <div class="col-12">
                      <button name="btnadd" class="btn btn-primary w-100" type="submit">Login</button>

                    </div>
                    

                    
                    <a href="Register.php"><h1 class="card-title text-center">Create A New Account</h1>
                    
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
  <script src="Assisets_backhand/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="Assisets_backhand/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Assisets_backhand/vendor/chart.js/chart.min.js"></script>
  <script src="Assisets_backhand/vendor/echarts/echarts.min.js"></script>
  <script src="Assisets_backhand/vendor/quill/quill.min.js"></script>
  <script src="Assisets_backhand/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="Assisets_backhand/vendor/tinymce/tinymce.min.js"></script>
  <script src="Assisets_backhand/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>