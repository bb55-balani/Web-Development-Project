<?php
    $host = "localhost";
    $username = "root";
    $pwd = "";
    $dbname = "cllg_blood_project";

    $conn = mysqli_connect($host,$username,$pwd,$dbname);
    if(!$conn){
        echo "Error in database connection";
    }
    else{
        // echo "Database connected successfully!!";
    }
?>