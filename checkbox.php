<?php
session_start();


$con = mysqli_connect('localhost','root',"",'phpproject');


if (isset($_POST['c_delete'])) {


    $all_id = $_POST['c_delete_id'];


    $ext_id = implode(',',$all_id);

    // echo $ext_id;

    $query = "DELETE FROM movies WHERE movie_id IN($ext_id)";

    $result = mysqli_query($con,$query);
    
    
    if ($result)
     {
    
        $_Session['status'] = "Selected Data Delete Successfully";
        
        header('location:allmovies.php');
    
    }
    
    else
    
    {
    
    
        $_Session['status'] = "Selected Data Delete Unsuccessfully";
        
        header('location:allmovies.php');
    }
    
    }

 ?>