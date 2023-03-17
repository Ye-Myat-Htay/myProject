<?php
$con = mysqli_connect('localhost', 'root', '', 'ecommerce');
if(!$con) {
    die(mysqli_error($con));
    // echo "Connected";
} 
// else{
// //     die(mysqli_error($con));
// // }
?>