<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Movies Booking</title>
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Assisets_fronthand/css/style1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

</head>

<body>

    <div class="hero1">

        <div id="header"></div>
    </div>
    <script src="Assisets_fronthand/js/head.js"></script>
    <!-- <div class="hero"> -->

    </div>
    <div class="text-box1 pl-5">
        <p>WELLCOME</p>
        <p>TO</p>
        <h1>Online <br>Movies Booking</h1>
        <h3></h3>

    </div>
    </div>

    <h1 class="text-center Trendy mt-5"><b>Movies</b></h1>
    <p class="text-center Trendyp"> We have Cinema & other Entertainment sites.<br>
        Checkout our gallery and pricing below.</p>
    <!-- <hr> -->
    <div class="container" id="gallery">
        <div class="row">

            <?php
            $query = "Select * from movies";
            $results = mysqli_query($con, $query);

            ?>

            <?php
            foreach ($results as $result) {
            ?>
                <div class="col-lg-4">
                    <div class="card-1">

                        <div class="cardbody">
                            <img src="images/<?php echo $result['image'] ?>" height="200px" width="200px" alt="No File">
                            <h1 card-title="Swing Chair"><?php echo $result['title'] ?></h1>

                            <a class="btn btn-outline-light" style="border-radius: 0px;" href="detail.php?id=<?php echo $result['movie_id'] ?>">More Detail</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>

    </div>
    <h1 class="text-center Trendy mt-5"><b>CATEGORIES</b></h1>
    <p class="text-center Trendyp" id="trendyp"> We have Resturants & other Entertainment sites.<br>
        Checkout our gallery and pricing below.</p>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-2  mx-auto">
                <div class="card">
                    <img class="card-img-top" src="Assisets_fronthand/images/t1.jpg" alt="">
                    <div class="card-body">
                        <center>
                            <h3 class="card-title">Simple Cinema</h3>

                            <h6 class="card-text">A Cinema or more informally an eately is a bussiness thats repairs
                                serves food and drinks to customers</h6>

                        </center>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 mt-2 mx-auto">
                <div class="card-2">
                    <img class="card-img-top" src="Assisets_fronthand/images/t4.jpg" alt="">
                    <div class="card-body">
                        <center>
                            <h3 class="card-title">2D Cinema</h3>

                            <h6 class="card-text">Cinema is a great escape from real life. Furthermore, its helps in
                                rejuvenation the mind of a person</h6>

                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>


    <h1 class="text-center home12">
        <h1 class="text-center Trendy mt-5"><b>TICKETS & PRICES</b></h1>
        <p class="text-center Trendyp"> We have .<br>
            Checkout our pricing below.</p>
    </h1>
    <!-- <hr> -->
    <!-- card -->
    <!-- <div class="tp"> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 my-sm-3">
                <div class="card  text-dark" id="cardhome">
                    <div class="card-title h1 mt-5 text-center"><b class="m2">Week</b></div>
                    <hr class="w-50 m-auto">
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-lg-6 mt-5">Mini-golf</div>
                            <div class="col-lg-6 mt-5 font-weight-bold">25 Rs</div>
                            <div class="col-lg-6 mt-5">Driving range</div>
                            <div class="col-lg-6 mt-5 font-weight-bold">50 Rs</div>
                            <div class="col-lg-6 mt-5">Arcade and redemption</div>
                            <div class="col-lg-6 mt-5 font-weight-bold">100 Rs</div>
                            <div class="col-lg-6 mt-5">Batting cages and pitching lanes</div>
                            <div class="col-lg-6 mt-5 font-weight-bold">150 Rs</div>
                            <div class="col-lg-6 mt-5">Climbing walls</div>
                            <div class="col-lg-6 mt-5 font-weight-bold">200 Rs</div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 my-sm-3">

                <div class="card  text-light" id="cardhomem1">
                    <div class="card-title h1 mt-5 text-center text-light"><b class="m1">Family</b></div>
                    <hr class="w-50 m-auto">
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-lg-6 mt-5">Mini-golf</div>
                            <div class="col-lg-6 mt-5 font-weight-bold">35 Rs</div>
                            <div class="col-lg-6 mt-5">Driving range</div>
                            <div class="col-lg-6 mt-5 font-weight-bold">80 Rs</div>
                            <div class="col-lg-6 mt-5">Arcade and redemption</div>
                            <div class="col-lg-6 mt-5 font-weight-bold">120 Rs</div>
                            <div class="col-lg-6 mt-5">Batting cages and pitching lanes</div>
                            <div class="col-lg-6 mt-5 font-weight-bold">180 Rs</div>
                            <div class="col-lg-6 mt-5">Climbing walls</div>
                            <div class="col-lg-6 mt-5 font-weight-bold">230 Rs</div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 my-sm-3">

                <div class="card  text-dark" id="cardhome">
                    <div class="card-title h1 mt-5 text-center"><b class="m2"> kids </b></div>
                    <hr class="w-50 m-auto">
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-lg-6 mt-5">Mini-golf</div>
                            <div class="col-lg-6 mt-5 font-weight-bold">50 Rs</div>
                            <div class="col-lg-6 mt-5">Driving range</div>
                            <div class="col-lg-6 mt-5 font-weight-bold">100 Rs</div>
                            <div class="col-lg-6 mt-5">Arcade and redemption</div>
                            <div class="col-lg-6 mt-5 font-weight-bold">150 Rs</div>
                            <div class="col-lg-6 mt-5">Batting cages and pitching lanes</div>
                            <div class="col-lg-6 mt-5 font-weight-bold">200 Rs</div>
                            <div class="col-lg-6 mt-5">Climbing walls</div>
                            <div class="col-lg-6 mt-5 font-weight-bold">250 Rs</div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- </div> -->
    <!-- <hr> -->




    <div id="footer" class="footer"></div>

    <script src="Assisets_fronthand/js/foot.js"></script>




    <script type="text/javascript" src="Assisets_fronthand/vanilla-tilt.js"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".card-1"), {
            max: 25,
            speed: 400,
            glare: true,
            "max-glare": 1,
        });
    </script>


</body>

</html>