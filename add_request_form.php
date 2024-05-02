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
if(isset($_REQUEST['request_blood'])){
    $b_group = $_REQUEST['bgroup'];
    $gen = $_REQUEST['Gender'];
    $f_nm = $_REQUEST['fname'];
    $l_nm = $_REQUEST['lname'];
    $dob = $_REQUEST['dob'];
    $phn = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $a = $_REQUEST['age'];
    $city = $_REQUEST['city'];
    $ut = $_REQUEST['unit'];
    // $_SESSION['other_page']= $ut;
    $user ="INSERT INTO `tbl_request`(`Blood_group`, `First_name`, `Last_name`, `Dob`, `Phone`, `Email`, `Age`, `City`, `Unit`,`User_id`) VALUES ('$b_group', '$f_nm', '$l_nm', '$dob', '$phn', '$email','$a','$city','$ut','$u');";

    if(mysqli_query($conn,$user)){ 
        echo '<script>alert("Request-Blood details successfully done!!");
        window.location.href="payment_page.php";
        </script>';
    }
    else{
        echo 'Error in registering!';        
    }       
}