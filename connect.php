<?php
    $con=new mysqli('localhost','root','','fitness');

    if(!$con){
        die(mysqli_error($con));
    }else{
        // echo"Connected Successfully";
    }
?>