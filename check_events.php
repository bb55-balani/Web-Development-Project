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
if(isset($_REQUEST['select_event'])){
    $add = $_REQUEST['address'];
    $ed = $_REQUEST['event_date'];
    $time = $_REQUEST['timings'];
    $event ="INSERT INTO `tbl_events`(`Address`,`Timings`,`Donor_id`,`Event_date`) VALUES ('$add','$time','$s','$ed');";

    if(mysqli_query($conn,$event)){ 
        echo '<script>alert("Event selected successfully");
        window.location.href="events_page.php";
        </script>';
    }
    else{
        echo 'Error in selecting events!!';        
    }    
}
?>