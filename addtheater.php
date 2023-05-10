<?php
include ('session.php');
?>
<?php
include ('admin_header.php');
?>
<?php include('config.php')
 ?>

 <?php
if (isset($_POST['btnsubmit'])) {


 $name = $_POST['t_name'];

 
 $status = $_POST['t_status'];


$query = "INSERT INTO theater(name,status) Values('$name','$status')";


$results = mysqli_query($con , $query);


if ($results) {


  $msg = "Theater Added Successfully";


}

else

{


  $msg = "Theater Added UnSuccessfully";


}

}





?>












<center>
<main id="main" class="main">
    <section class="section">
        <form action="" method="POST">
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
                  <h5 class="card-title">Add Theater</h5>
               </div>
              <!-- General Form Elements -->
              <form>
                <div class="row mb-3">
                  
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="t_name" placeholder="Enter Theater Name" required>
                  </div>
                </div>
                <div class="row mb-3">
                  
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="t_status" placeholder="Enter Theater Status" required>
                  </div>
                </div>
                <div class="col-sm-12">
                 <button type="submit" name="btnsubmit" class="btn btn-outline-primary">Add Theater</button>
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