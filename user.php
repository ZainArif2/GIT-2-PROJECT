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

$query = "SELECT * FROM admin";

$results = mysqli_query($con, $query);

?>



<form action="checkboxs.php" method="POST">









    <?php
    if (isset($status)) {

        echo "h4" . $_Session['status'] . "</h4?";
        unset($_Session['status']);
    }


    ?>



    <center>
        <main id="main" class="main">
            <section class="section">
                <div class="row col-lg-8 col-md-8 col-sm-17 my-sm-8">






                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">User Login</h5>

                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>

                                        <th scope="col">Id</th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Email</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($results as $result) {

                                    ?>

                                        <tr>

                                            <th scope="row"><?php echo $result['a_id'] ?></th>
                                            <td><?php echo $result['a_name'] ?></td>
                                            <td><?php echo $result['a_email'] ?></td>


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