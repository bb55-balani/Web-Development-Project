<?php
require_once 'connect.php';
if(isset($_REQUEST['submit_donor'])){
    $nm = $_REQUEST['Name'];
    $email = $_REQUEST['Email'];
    $uname = $_REQUEST['Username'];
    $gen = $_REQUEST['Gender'];
    $pass = $_REQUEST['Password'];
    $city = $_REQUEST['City'];
    $phn = $_REQUEST['Phone'];
    $dob = $_REQUEST['Dob'];

    $donor = "INSERT INTO `tbl_donor_registration` (`Name`, `Email`, `Username`, `Gender`, `Password`, `City`,`Phone`,`Dob`) VALUES ('$nm', '$email', '$uname', '$gen', '$pass', '$city','$phn','$dob')";

    if(mysqli_query($conn,$donor)){ 
        echo '<script>alert("Welcome '.$nm.'");
        window.location.href="donor_registration_successful.php";
        </script>';
    }
    else{
        echo 'Error in registering!';        
    }       
}
if(isset($_REQUEST['submit_user'])){
    $nm = $_REQUEST['Name'];
    $email = $_REQUEST['Email'];
    $uname = $_REQUEST['Username'];
    $gen = $_REQUEST['Gender'];
    $pass = $_REQUEST['Password'];
    $city = $_REQUEST['City'];
    $phn = $_REQUEST['Phone'];
    $dob = $_REQUEST['Dob'];
    
    $user = "INSERT INTO `tbl_user_registration` (`Name`, `Email`, `Username`, `Gender`, `Password`, `City`,`Phone`,`Dob`) VALUES ('$nm', '$email', '$uname', '$gen', '$pass', '$city','$phn','$dob')";
    
    if(mysqli_query($conn,$user)){ 
        echo '<script>alert("Welcome '.$nm.'");
        window.location.href="user_registration_successful.php";
        </script>';
    }
    else{
        echo 'Error in registering!';        
    }
}
?>