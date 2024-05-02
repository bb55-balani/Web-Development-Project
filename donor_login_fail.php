<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<?php
require_once 'connect.php';
session_start();
if(!isset($_SESSION['donor'])){
    header("Location:index.php");
    die();
}
?>
<div class="container mt-md-5 bg-warning p-5 rounded border">
    <div class="row d-flex justify-content-center">
        <div class="col d-flex justify-content-center">
            <img src="images/login_fail.png" alt="" class="img-fluid" width="200px"><br>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col d-flex justify-content-center">
            <p class="display-md-3 display-4 font-weight-bolder text-danger">&nbsp;LOGIN<br>FAILED!!</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col d-flex justify-content-center">
            <a href="donor_login.php" class="h5 text-danger">Click here to login again!!</a>
        </div>
    </div>
</body>
</html>