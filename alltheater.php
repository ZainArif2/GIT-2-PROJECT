<?php



include ('session.php');
?>
<?php
include ('admin_header.php');
?>
<?php
include ('config.php');
?>
<?php

$query = "SELECT * FROM theater";

$results = mysqli_query($con,$query);

?>



<form action="checkboxs.php" method="POST">







  

<?php
if (isset($status)) {
  
  echo "h4". $_Session['status'] . "</h4?";
  unset($_Session['status']);
}


?>



<center>
     <main id="main" class="main">
         <section class="section">
             <div class="row col-lg-8 col-md-8 col-sm-17 my-sm-8">
        
            

              
             

                 <div class="card">
                     <div class="card-body">
                       <h5 class="card-title">All Theater</h5>

    <!-- Table with stripped rows -->
                           <table class="table table-striped">
                              <thead>
                                 <tr>
                                    
                                            <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
          
        </tr>
      </thead>
      <tbody>
<?php foreach ($results as $result) {
  
?>
 
        <tr>
        
          <th scope="row"><?php echo $result['id'] ?></th>
          <td><?php echo $result['name'] ?></td>
          <td><?php echo $result['status'] ?></td>
          <td>

           
             <a href="edit.php?id=<?php echo $result['id']; ?>">
               <button type="button" class="btn btn-outline-success">Edit</button>
             </a>


        <a href="delete.php?id=<?php echo $result['id'] ?>">
          <button type="button" class="btn btn-outline-danger">Delete</button>
        </a>
          </td>
          
        </tr>
        
      </tbody>
      <?php
}
        ?>
    </table>
    <!-- End Table with stripped rows -->

  </div>
</div>










                
                
                 
            </div>
        </section>
    </Main> 
</center>







<?php
include ('admin_footer.php');
?>