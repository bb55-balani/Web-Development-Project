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
?>
<div class="container mt-md-5 bg-danger p-5 rounded">
    <div class="row d-flex justify-content-center">
        <div class="col d-flex justify-content-center">
            <img src="images/register_success.jpg" alt="" class="img-fluid" width="200px"><br>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col d-flex justify-content-center">
            <p class="display-md-3 display-4 text-white font-weight-bolder">SUCCESSFULLY<br>&nbsp;REGISTERED!!</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col d-flex justify-content-center">
            <a href="user_login.php" class="h5 text-light">Click here to login</a>
        </div>
    </div>
</div>
</body>
</html>
