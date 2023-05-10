<?php
include ('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/.css">
    <link rel="stylesheet" href="Assisets_fronthand/css/style1.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }

        .container-fluid1 {
            background-color: black;
            width: 100%;
            min-height: 70vh;
            
            align-items: center;
            justify-content: center;
            padding: 50px 8%;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            grid-gap: 30px;

        }

        .gallery img {
            width: 90%;
            height: 90%;
        }
        </style>
</head>

<body>
<script src="Assisets_fronthand/js/head.js"></script>
    <div id="header" class="header"></div>
    <h1 class="text-center home12">
        <h1 class="text-center Trendy mt-5"><b>Cinema</b></h1>
        <p class="text-center Trendyp"> We have a wide range of rides in our Movies which are certified by
            various Movies administrations .<br>
            Checkout our pricing below.</p>
    </h1>
    <div class="container-fluid1">
        <div class="gallery">
            

                
                  <img src="Assisets_fronthand/images/t1.jpg" alt="">
              
              
                 <img src="Assisets_fronthand/images/t2.jpg" alt="">
              
              
                 <img src="Assisets_fronthand/images/t3.jpg" alt="">
             
             
                 <img src="Assisets_fronthand/images/t4.jpg" alt="">
             
             
                 <img src="Assisets_fronthand/images/t5.jpg" alt="">
             
             
                 <img src="Assisets_fronthand/images/t6.jpg" alt="">
             
            </div> 
            
        </div>
    </div>


    <h1 class="text-center home12">
        <h1 class="text-center Trendy mt-5"><b>Movies</b></h1>
        <p class="text-center Trendyp"> We have  .<br>
            Checkout our pricing below.</p>
    </h1>
    <div class="container-fluid1">
        <div class="gallery">
            <?php
            
            $query = "Select * from movies";
            $results = mysqli_query($con,$query);
            
            ?>

            <?php
            foreach($results as $result){
            ?>
            <img src="images/<?php echo $result['image'] ?>"  alt="">
            <?php
            }
            ?>
            
        </div>
    </div>


    <h1 class="text-center home12">
        <h1 class="text-center Trendy mt-5"><b>FOOD COURT</b></h1>
        <p class="text-center Trendyp"> We have .<br>
            Checkout our pricing below.</p>
    </h1>
    <div class="container-fluid1">
        <div class="gallery">
            
        <img src="Assisets_fronthand/images/f1.jpg" alt="">
              
              
              <img src="Assisets_fronthand/images/f2.jpg" alt="">
           
           
              <img src="Assisets_fronthand/images/f3.jpg" alt="">
          
          
              <img src="Assisets_fronthand/images/f4.jpg" alt="">
          
          
              <img src="Assisets_fronthand/images/f5.jpg" alt="">
          
          
              <img src="Assisets_fronthand/images/f6.jpg" alt="">
        </div>
    </div>
    <hr>

    <div id="footer" class="footer"></div>



    <script src="js/lightbox-plus-jquery.js"></script>


    <script src="Assisets_fronthand/js/foot.js"></script>
    <script src="Assisets_fronthand/js/head.js"></script>
</body>

</html>
<!-- Footer -->