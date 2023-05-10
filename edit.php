<?php
include ('admin_header.php');
?>
<?php include('config.php')
 ?>




<?php
if (isset($_POST['btnsubmit'])) {

 $id = $_POST['id'];


 $name1 = $_POST['name'];

 
 $status1 = $_POST['status'];


$query = "UPDATE theater SET name = '$name1', status = '$status1' WHERE id = '$id'";


$results = mysqli_query($con , $query);


if ($results) {


  $msg = "Theater Update Successfully";


}

else

{


  $msg = "Theater Update UnSuccessfully";


}

}


if (isset($_GET['id'])) {


$id = $_GET['id'];

$qurey = "SELECT * FROM theater Where id = '$id'";

$result = mysqli_query($con , $qurey);

foreach ($result as $value) {


 $id = $value['id'];

 $name1 = $value['name'];

 $status1 = $value['status'];
    
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
                  <h5 class="card-title">Edit Theater</h5>
               </div>
              <!-- General Form Elements -->
              <form>
                <div class="row mb-3">
                  
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="name"  placeholder="Enter Theater Name" value="<?php echo $name1; ?>">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                </div>
                </div>
                <div class="row mb-3">
                  
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="status"  placeholder="Enter Theater Status" value="<?php echo $status1; ?>">
                  </div>
                </div>
                <div class="col-sm-12">
                 <button type="submit" name="btnsubmit" class="btn btn-outline-primary">Update Theater</button>
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