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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    <!-- header -->
    <div id="header" class="header"></div>

    <script src="Assisets_fronthand/js/head.js"></script>

    <div class="container-fluid1 img-fluid">

        <h1 class="text-center home12">
            <h1 class="text-center text-muted mt-4"><b>Movies Details</b></h1>
            <p class="text-center text-dark font-weight-bold"> <br>
                Checkout our pricing below.</p>
        </h1>
    </div>
    <div class="container-fluid">
        <form>



            <?php
            $id = $_GET['id'];
            $query = "Select * from movies Where movie_id='$id'";
            $results = mysqli_query($con, $query);

            ?>

            <?php
            foreach ($results as $result) {
            ?>
                <hr>

                <div class="row" style="background-color: rgb(0, 0, 0);">
                    <div class="col-5 col-lg-6 col-md-6 col-sm-12 my-sm-3 p-5">
                        <center>
                            <h1 class="text-light"><b><b id="m1"><?php echo $result['title'] ?></b></b></h1>

                            <div class=" card-img-top col-lg-12 mt-5"><img src="images/<?php echo $result['image'] ?>" height="200px" width="200px" alt="No File"></div>
                        </center>
                        <hr style="width: 150px;" class="mx-auto">
                        <p class="text-light text-center" style="font-size: large;">Short Discription: <?php echo $result['discription'] ?></p>
                        <p class="text-light text-center" style="font-size: large;">Time: <?php echo $result['time'] ?></p>
                        <p class="text-light text-center" style="font-size: large;">Start Date: <?php echo $result['s_date'] ?></p>
                        <p class="text-light text-center" style="font-size: large;">End Date: <?php echo $result['e_date'] ?></p>
                        <center>
                            <a class="btn btn-outline-light" style="border-radius: 0px;" href="order.php?id=<?php echo $result['movie_id'] ?>">Order Now</a>
                        </center>
                    </div>
                    <div class="col-5 col-lg-6 col-md-6 col-sm-12 my-sm-3 ">
                        <video autoplay controls src="videos/<?php echo $result['video'] ?>"></video>
                        <div class="container6">
                            <div class="post">
                                <div class="text text-center">Thanks For Rating Us!</div>
                                <div class="star-widget">
                                    <input type="radio" name="rate" id="rate-5">
                                    <label for="rate-5" class="fa-solid  fa-star"></label>
                                    <input type="radio" name="rate" id="rate-4">
                                    <label for="rate-4" class="fa-solid  fa-star"></label>
                                    <input type="radio" name="rate" id="rate-3">
                                    <label for="rate-3" class="fa fa-star"></label>
                                    <input type="radio" name="rate" id="rate-2">
                                    <label for="rate-2" class="fa fa-star"></label>
                                    <input type="radio" name="rate" id="rate-1">
                                    <label for="rate-1" class="fa fa-star"></label>

                                    <form class="header">
                                        <header></header>
                                        <textarea class="form-control" id="form4Example3" placeholder="Enter Your Message"></textarea>
                                        <button type="submit" name="btnsubmit" class="btn btn-success btn-block mb-4">Send</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>


    </div>


    </div>
<?php } ?>
<hr>
<div class="container-fluid2 img-fluid">

</div>


<!-- Footer -->
<div id="footer" class="footer"></div>

<script src="Assisets_fronthand/js/foot.js"></script>
<script>
    const btn = document.querySelector("button");
    const post = document.querySelector(".post");
    const wedget = document.querySelector("star-wedget");
    btn.onclick = () => {
        wedget.style.display = "none";
        post: style.display = "block";
    }
</script>
</body>

</html>