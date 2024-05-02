<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- for css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- for js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <!-- for icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.css">
    <!-- font icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
        integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <!-- for navbar button -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</head>
<?php
require_once 'connect.php';
session_start();
        if(!isset($_SESSION['user'])){
            header("Location:index.php");
            die();
        }
?>
<body style="background-color:gray;">
    <div class="container-fluid rounded mt-md-5 p-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6 text-dark rounded bg-light p-4">
                <div class="row">
                    <div class="col-xl-3 mr-5">
                        <img src="images/rupees.webp" alt="" width="200px">
                    </div>
                    <div class="col-xl-8 mt-xl-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam est debitis quidem dolorum vero magnam eligendi rerum aliquam minima. Numquam natus magnam quae tempora molestiae? Quia inventore alias dolor nemo?
                    </div>
                </div>
                <form action="check_payment.php" method="post" class="ml-2 mt-4">
                    <div class="row mt-xl-n4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="h5">Full Name</label>
                                <input type="text" class="form-control" name="nm">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="h5">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="h5">Blood Group</label>
                                <input type="text" class="form-control" name="bgrp">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="h5">Total Units</label>
                                <input type="number" class="form-control" name="t_units">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="h5">Price per Unit(in ml)</label>
                                <input type="number" class="form-control" name="p_unit" value="950">
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <div class="form-group">
                                <button name="pay_btn" class="btn btn-success btn-lg mt-3 mb-2">PAY AMOUNT</button><br>
                                <a href="user_page.php" class="ml-n2 text-muted h6">Click to visit main page</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>