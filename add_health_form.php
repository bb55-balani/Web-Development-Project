<?php
require_once 'connect.php';
session_start();
        if(!isset($_SESSION['donor'])){
            header("Location:index.php");
            die();
        }
        else{
         $s =  $_SESSION['donor'];
        //  print($s);  
        }
if(isset($_REQUEST['donation_form'])){
    
    $b_group = $_REQUEST['bgroup'];
    $gen = $_REQUEST['Gender'];
    $f_nm = $_REQUEST['fname'];
    $l_nm = $_REQUEST['lname'];
    $dob = $_REQUEST['dob'];
    $phn = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $a = $_REQUEST['age'];
    $addr = $_REQUEST['address'];
    $city = $_REQUEST['city'];
    $weight = $_REQUEST['weight'];
    $pulse = $_REQUEST['pulse'];
    $h = $_REQUEST['hb'];  
    $b = $_REQUEST['bp'];
    $t = $_REQUEST['temp'];
    // $d = $_REQUEST['d_blood'];
    // $c1 = $_REQUEST['check1'];
    // $c2 = $_REQUEST['check2'];
    // $c3 = $_REQUEST['check3'];
    // $c4 = $_REQUEST['check4'];
    

    $donor ="INSERT INTO `tbl_donation`(`Blood_group`, `First_name`, `Last_name`, `Dob`, `Phone`, `Email`, `Age`, `Address`, `City`, `Weight`, `Pulse`, `Hb`, `Bp`, `Temperature`, `Gender`,`Donor_id`) VALUES ('$b_group', '$f_nm', '$l_nm', '$dob', '$phn', '$email','$a','$addr','$city','$weight','$pulse','$h','$b','$t','$gen','$s');";

    if(mysqli_query($conn,$donor)){ 
        echo '<script>alert("Donation-Form details successfully done!!");
        window.location.href="events_page.php";
        </script>';
    }
    else{
        echo 'Error in registering!';        
    }       
}