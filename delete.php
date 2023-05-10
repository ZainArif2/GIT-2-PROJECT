<?php



include_once 'config.php';


$id = $_GET['id'];


$result = mysqli_query($con , "DELETE FROM theater WHERE id = $id");






header('location: alltheater.php');



?>