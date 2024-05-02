<?php
require_once 'connect.php';
session_start();
        if(!isset($_SESSION['user'])){
            header("Location:index.php");
            die();
        }
        else{
            $u = $_SESSION['user'];
        }
if(isset($_REQUEST['pay_btn'])){
    $n = $_REQUEST['nm'];
    $em = $_REQUEST['email'];
    $bg = $_REQUEST['bgrp'];
    $tunit = $_REQUEST['t_units'];
    $punit = $_REQUEST['p_unit'];
    $tamt = $tunit*$punit;
    $donor = "INSERT INTO `tbl_payment` (`Full Name`, `Email`, `Blood_grp`, `Total_units`, `Price_per_unit`, `Total_amt`,`User_id`) VALUES ('$n', '$em', '$bg', '$tunit', '$punit', '$tamt','$u')";

    if(mysqli_query($conn,$donor)){ 
        echo '<script>alert("Payment Successful!!");
        window.location.href="payment_page.php";
        </script>';
    }
    else{
        echo 'Error in paying momey!!';        
    }  
}
?>