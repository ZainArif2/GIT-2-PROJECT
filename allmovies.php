<?php
include('session.php');
?>
<?php
include('admin_header.php');
?>
<?php
include('config.php');
?>
<?php

$query = "SELECT * FROM movies";

$results = mysqli_query($con, $query);

?>



<form action="checkbox.php" method="POST">









  <?php
  if (isset($status)) {

    echo "h4" . $_Session['status'] . "</h4?";
    unset($_Session['status']);
  }


  ?>



  <center>
    <main id="main" class="main">
      <section class="section">
        <div class="row col-lg-20 col-md-20 col-sm-25 my-sm-20">






          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All Movies</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      <button type="submit" name="c_delete" class="btn btn-outline-danger">Delete</button>
                    </th>
                    <th scope="col">Id</th>
                    <th scope="col">Images</th>
                    <th scope="col">Movies Title</th>
                    <th scope="col">Movies Trailer</th>
                    <th scope="col">Discription</th>
                    <th scope="col">Times</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>

                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($results as $result) {

                  ?>

                    <tr>
                      <td>
                        <center>
                          <input type="checkbox" name="c_delete_id[]" value="<?php echo $result['movie_id'] ?>">
                        </center>
                      </td>
                      <th scope="row"><?php echo $result['movie_id'] ?></th>
                      <td><img src="images/<?php echo $result['image'] ?>" height="100px" width="75px" alt="No File"></td>
                      <td><?php echo $result['title'] ?></td>
                      <td><video src="videos/<?php echo $result['video'] ?>" height="100px" width="75px" alt="No File"></td>
                      <td><?php echo $result['discription'] ?></td>
                      <td><?php echo $result['time'] ?></td>
                      <td><?php echo $result['s_date'] ?></td>
                      <td><?php echo $result['e_date'] ?></td>

                      <td>


                        <a href="m_edit.php?id=<?php echo $result['movie_id']; ?>">
                          <button type="button" class="btn btn-outline-success">Edit</button>
                        </a>


                        <a href="m_delete.php?id=<?php echo $result['movie_id'] ?>">
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
  include('admin_footer.php');
  ?>