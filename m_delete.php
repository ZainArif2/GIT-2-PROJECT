<?php



include_once 'config.php';


$id = $_GET['id'];


$result = mysqli_query($con , "DELETE FROM movies WHERE movie_id= $id");






header('location: allmovies.php');



?>