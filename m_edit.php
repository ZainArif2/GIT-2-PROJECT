<?php
include ('admin_header.php');
?>
<?php include('config.php')
 ?>

<?php


if (isset($_GET['id'])) {


$id = $_GET['id'];

$qurey = "SELECT * FROM movies Where movie_id = '$id'";

$result = mysqli_query($con , $qurey);

foreach ($result as $value) {

    $movie_id = $value['movie_id'];

    $title = $value['title'];

 
    $discription = $value['discription'];
   
   
    $time = $value['time'];
   
   
    $s_date = $value['s_date'];
   
   
    $e_date = $value['e_date'];

    $images = $value['image'];
    
}

}

?>


<?php
if (isset($_POST['btnsubmit'])) {

    $movies = $_POST['movie_id'];

    $title = $_POST['title'];

 
    $discription = $_POST['discription'];
   
   
    $time = $_POST['time'];
   
   
    $s_date = $_POST['s_date'];
   
   
    $e_date = $_POST['e_date'];

    $image = $_POST['image'];


$query = "UPDATE movies SET title = '$title', discription = '$discription' , time = '$time' , s_date = '$s_date' , e_date = '$e_date', image = '$image' WHERE movie_id = '$id'";


$results = mysqli_query($con , $query);


if ($results) {


  $msg = "Movie Update Successfully";


}

else

{


  $msg = "Movie Update UnSuccessfully";


}

}
?>

<center>
<main id="main" class="main">
    <section class="section">
        <form action="" method="POST" enctype="multipart">
            <?php
            if (isset($msg))
             { ?>

<div class="alert alert-dismissible alert-danger col-lg-4 col-md-4 col-sm-12 my-sm-3">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong><?php echo $msg ?></strong></div>
  


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
             <input type="text" class="form-control" name="title" value="<?php echo $title; ?>"required>
           </div>
         </div>
         <div class="row mb-3">
           
           <div class="col-sm-12">
           <h6><b>Enter Movie Description</b></h6>
             <input type="text" class="form-control" name="discription" value="<?php echo $discription; ?>" required>
           </div>
         </div>
         <div class="row mb-3">
           
           <div class="col-sm-12">
           <h6><b>Movie Time</b></h6>
             <input type="time" class="form-control" name="time" value="<?php echo $time; ?>"required>
           </div>
         </div>
         <div class="row mb-3">
           
           <div class="col-sm-12">
             <h6><b>Movie Start Date</b></h6>
             <input type="date" class="form-control" name="s_date" value="<?php echo $s_date; ?>"required>
           </div>
         </div>
         <div class="row mb-3">
           
           <div class="col-sm-12">
             <h6><b>Movie End Date</b></h6>
             <input type="date" class="form-control" name="e_date" value="<?php echo $e_date; ?>"required>
           </div>
         </div>
         <div class="row mb-3">
           
           <div class="col-sm-12">
             <h6><b>Movie Image</b></h6>
             <input type="file" class="form-control" name="image" required>
           </div>
         </div>
         <div class="col-sm-12">
          <button type="submit" name="btnsubmit" class="btn btn-outline-primary">Add Movies</button>
          </div>
</br>

                
                
                 
        </div>
</form>
    </section>
</Main> 
</center>



































            



<?php
include ('admin_footer.php');
?>