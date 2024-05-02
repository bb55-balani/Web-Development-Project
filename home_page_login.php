<?php
require_once 'connect.php';
session_start();
if(isset($_REQUEST['opt_select'])){
    $opt = $_REQUEST['opt_select'];
    if($opt=="Donor"){   
        $un = $_REQUEST['Email'];
        $pass = $_REQUEST['pass'];
        // echo $_REQUEST['opt_select'];
        $query = "SELECT * From tbl_donor_registration WHERE `Email` = '$un' AND `Password`= '$pass'";
        $result = mysqli_query($conn,$query);
        if($row=mysqli_fetch_assoc($result)){
            echo $_SESSION['donor']=$row['Donor_id'];
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
    else if($opt=="User"){
        $un = $_REQUEST['Email'];
        $pass = $_REQUEST['pass'];
        $query = "SELECT * From tbl_user_registration WHERE `Email` = '$un' AND `Password`= '$pass'";
        $result = mysqli_query($conn,$query);
        if($row=mysqli_fetch_assoc($result)){
            echo $_SESSION['user']=$row['User_id'];
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
}
?>