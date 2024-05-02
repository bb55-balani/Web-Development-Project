<?php
require_once 'connect.php';
session_start();
if(isset($_REQUEST['submit_donor_login'])){
    $un = $_REQUEST['email'];
    $pass = $_REQUEST['password'];

    $query = "SELECT * From tbl_donor_registration WHERE `Email` = '$un' AND `Password`= '$pass'";
    $result = mysqli_query($conn,$query);
    if($row=mysqli_fetch_assoc($result)){
        $_SESSION['donor']=$row['Donor_id'];
        echo '<script>alert("Login Successful!!")
        window.location.href="donor_page.php";
        </script>';
    }
    else{
        echo '<script>alert("Oops! Login Unsuccessful!!")
        window.location.href="donor_login_fail.php";
        </script>';
    }
}
else if(isset($_REQUEST['submit_user_login'])){
    $un = $_REQUEST['email'];
    $pass = $_REQUEST['password'];
    
    $query = "SELECT * From tbl_user_registration WHERE `Email` = '$un' AND `Password`= '$pass'";
    $result = mysqli_query($conn,$query);
    if($row=mysqli_fetch_assoc($result)){
        $_SESSION['user']=$row['User_id'];
        echo '<script>alert("Login Successful!!");
        window.location.href="user_page.php";
        </script>';
    }
    else{
        echo '<script>alert("Oops! Login Unsuccessful!!")
        window.location.href="user_login_fail.php";
        </script>';
    }
}
?>