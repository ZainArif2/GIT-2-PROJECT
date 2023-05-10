<?php
include('session.php');
?>
<?php
include('admin_header.php');
?>
<?php include('config.php')
?>

<?php
if (isset($_POST['btnsubmit'])) {


  $title = $_POST['title'];


  $discription = $_POST['discription'];


  $time = $_POST['time'];


  $s_date = $_POST['s_date'];


  $e_date = $_POST['e_date'];



  $errors = array();
  $file_name = $_FILES['image']['name'];
  $file_size = $_FILES['image']['size'];
  $file_tmp = $_FILES['image']['tmp_name'];
  $file_type = $_FILES['image']['type'];
  $file_ext = strtolower($_FILES['image']['name']);

  $expensions = array("jpeg", "jpg", "png");

  if (file_exists($file_name)) {
    echo "Sorry, file already exists.";
  }

  if (in_array($file_ext, $expensions) === false) {
    $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
  }

  if ($file_size > 2097152) {
    $errors[] = 'File size must be excately 2 MB';
  }

  if (empty($errors) == true) {
    move_uploaded_file($file_tmp, "images/" . $file_name . "." . $file_ext);
  } else {
    print_r($errors);
  }



  $filename = $_FILES["video"]["name"];


  $folder = "videos/";

  $folder_target = $folder . basename($_FILES["video"]["name"]);



  move_uploaded_file($_FILES["video"]["tmp_name"], $folder_target);



  $query = "INSERT INTO movies(title,discription,time,s_date,e_date,image,video) 
  Values('$title','$discription','$time','$s_date','$e_date','$file_name','$filename')";


  $results = mysqli_query($con, $query);


  if ($results) {


    $msg = "Movies Added Successfully";
  } else {


    $msg = "Movies Added UnSuccessfully";
  }
}

?>












<center>
  <main id="main" class="main">
    <section class="section">
      <form action="" method="POST" enctype="multipart/form-data">


        <?php
        if (isset($msg)) { ?>

          <div class="alert alert-dismissible alert-danger col-lg-4 col-md-4 col-sm-12 my-sm-3">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong><?php echo $msg ?></strong>
          </div>



        <?php
        }
        ?>


        <div class="row col-lg-8 col-md-8 col-sm-17 my-sm-8">



          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Movies</h5>
            </div>
            <!-- General Form Elements -->
            <form>
              <div class="row mb-3">

                <div class="col-sm-12">
                  <h6><b>Enter Movie Title</b></h6>
                  <input type="text" class="form-control" name="title" required>
                </div>
              </div>
              <div class="row mb-3">

                <div class="col-sm-12">
                  <h6><b>Enter Movie Description</b></h6>
                  <input type="text" class="form-control" name="discription" required>
                </div>
              </div>
              <div class="row mb-3">

                <div class="col-sm-12">
                  <h6><b>Movie Time</b></h6>
                  <input type="time" class="form-control" name="time" required>
                </div>
              </div>
              <div class="row mb-3">

                <div class="col-sm-12">
                  <h6><b>Movie Start Date</b></h6>
                  <input type="date" class="form-control" name="s_date" required>
                </div>
              </div>
              <div class="row mb-3">

                <div class="col-sm-12">
                  <h6><b>Movie End Date</b></h6>
                  <input type="date" class="form-control" name="e_date" required>
                </div>
              </div>
              <div class="row mb-3">

                <div class="col-sm-12">
                  <h6><b>Movie Image</b></h6>
                  <input type="file" class="form-control" name="image" required>
                </div>

              </div>
              <div class="row mb-3">

                <div class="col-sm-12">
                  <h6><b>Movie Trailer</b></h6>
                  <input type="file" class="form-control" name="video" required>
                </div>

              </div>
              <div class="col-sm-12">
                <button type="submit" name="btnsubmit" class="btn btn-outline-primary">Add Movies</button>
              </div>
              </br>




          </div>
      </form>
    </section>
  </main>
</center>












<?php
include('admin_footer.php');
?>