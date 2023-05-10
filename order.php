<?php
session_start();
?>
<?php
include('config.php');



?>
<!DOCTYPE html>
<html>

<head>
    <title>Tickets & Price</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Assisets_fronthand/css/style1.css">

    <style>
        .container-fluid1 {
            background-image: url(Assisets_fronthand/T_p/head.png);
            width: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            padding-top: 100px;
        }

        .container-fluid2 {
            background-image: url(Assisets_fronthand/T_p/foot.png);
            width: 100%;
            height: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            padding-bottom: 250px;
        }
    </style>
</head>

<body>

    <?php

    if (isset($_POST["btnadd"])) {
        if ($_POST["btnadd"] == "cart") {
            if (isset($_SESSION["shopping_cart"])) {
                $is_available = 0;
                foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                    if ($_SESSION["shopping_cart"][$keys]['movie_id'] == $_POST["movie_id"]) {
                        $is_available++;
                        $_SESSION["shopping_cart"][$keys]['product_quantity'] = $_SESSION["shopping_cart"][$keys]['product_quantity'] + $_POST["product_quantity"];
                    }
                }
                if ($is_available == 0) {
                    $item_array = array(
                        'movie_id'               =>     $_POST["movie_id"],
                        'title'             =>     $_POST["hidden_name"],
                        'time'            =>     $_POST["hidden_time"],
                        's_date'         =>     $_POST["hidden_s_date"],
                        'theater'            =>     $_POST["hidden_theater"],
                        'quantity'         =>     $_POST["hidden_quantity"]
                    );
                    $_SESSION["shopping_cart"][] = $item_array;
                }
            } else {
                $item_array = array(
                    'movie_id'               =>     $_POST["movie_id"],
                    'title'             =>     $_POST["hidden_name"],
                    'time'            =>     $_POST["hidden_time"],
                    's_date'         =>     $_POST["hidden_s_date"],
                    'theater'            =>     $_POST["hidden_theater"],
                    'quantity'         =>     $_POST["hidden_quantity"]
                );
                $_SESSION["shopping_cart"][] = $item_array;
            }
        }
    }











    ?>



    <!-- header -->
    <div id="header" class="header"></div>

    <script src="Assisets_fronthand/js/head.js"></script>
    <center>

        <main id="main" class="main">
            <section class="section">
                <?php
                $id = $_GET['id'];
                $query = "Select * from movies Where movie_id='$id'";
                $results = mysqli_query($con, $query);

                ?>

                <?php
                foreach ($results as $result) {
                ?>
                    <form action="order.php?id=<?php echo $result['movie_id'] ?>&cart=<?php echo $result['movie_id'] ?>" method="POST">

                        <input type="hidden" name="hidden_name" value="<?php echo $result['title'] ?>" />
                        <input type="hidden" name="hidden_time" value="<?php echo $result['time'] ?>" />
                        <input type="hidden" name="hidden_s_date" value="<?php echo $result['s_date'] ?>" />
                        <input type="hidden" name="hidden_theater" value=" echo '<option>' . $row['name'] . '</option>';" />
                        <input type="hidden" name="hidden_quantity" value="1" />
                        <div class="container">

                            <div class="row" style="margin-left: 25%;">




                                <div class="card1 col-lg-15 col-md-8 col-sm-17 my-sm-8">
                                    <div class="card-body center">
                                        <h5 class="card-title"><b>Order Now</b></h5>
                                    </div>
                                    <!-- General Form Elements -->



                                    <div class="row mb-3">

                                        <div class="col-sm-12">
                                            <img src="images/<?php echo $result['image'] ?>" height="250px" width="250px" alt="No File">
                                        </div>
                                    </div>
                                    <div class="row mb-3">

                                        <div class="col-sm-12">
                                            <div class="col-lg-12 h3 mt-5 font-weight-bold" name="title">Name: <?php echo $result['title'] ?></div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">

                                        <div class="col-sm-12">
                                            <h6><b>Movie Time</b></h6>
                                            <input type="time" name="time" class="form-control" name="time" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">

                                        <div class="col-sm-12">
                                            <h6><b>Movie Start Date</b></h6>
                                            <input type="date" name="s_date" class="form-control" name="s_date" required>
                                        </div>

                                    </div>
                                    <div class="row mb-2">

                                        <div class="col-sm-12">
                                            <h6><b>Movie End Date</b></h6>
                                            <input type="date" class="form-control" name="e_date" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">

                                        <div class="col-sm-12">
                                            <select class="btn btn-secondary dropdown-toggle">
                                                <option name="theater">
                                                    <b>Select Theater</b>
                                                </option>
                                                <?php
                                                $sqli = "Select * from theater";
                                                $result = mysqli_query($con, $sqli);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    echo '<option>' . $row['name'] . '</option>';
                                                }

                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-2">

                                        <div class="col-sm-12">
                                            <h6><b>Select Chairs</b></h6>
                                            <input type="number" class="horizontal_quantity text-center " name="quantity" value="1" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">

                                        <input type="submit" name="btnadd" class=" col-sm-12 text-white btn btn-outline-danger" value="Tickets Now"></input>
                                    </div>
                                    </br>
                                <?php
                            }
                                ?>


                                </div>
                            </div>
                        </div>
                    </form>


            </section>
        </main>
    </center>


    <!-- Footer -->
    <div id="footer" class="footer"></div>

    <script src="Assisets_fronthand/js/foot.js"></script>
</body>

</html>