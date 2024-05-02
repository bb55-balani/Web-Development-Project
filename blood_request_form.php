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
    <style>
    #head_img {
        height: 100%;
    }
    </style>
</head>
<?php
    session_start();
        if(!isset($_SESSION['user'])){
            header("Location:index.php");
            die();
        }
    ?>
<body style="background-color:gray;">
    <div class="container shadow-lg bg-white rounded mt-md-2">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 mt-3">
                <img src="images/blood_type.jpg" alt="" class="img-fluid ml-lg-5" id="head_img" width="190px">
                <!-- <i class="bi bi-droplet display-1"></i> -->
            </div>
            <div class="col-lg-6 mt-4 ml-n4">
                <p class="display-4">Blood Request Form</p>
                <p class="h5 text-muted">Confidential - Please answer the following questions correctly.Blood is
                    essential for maintaining the health and life of the human body.</p>
            </div>
        </div>
    </div>
    <div class="container rounded">
        <div class="row">
            <div class="col-md-12 text-white rounded" style="background-color:#DF3C5F;">
                <form action="add_request_form.php" method="post" class="ml-md-4 mt-4">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="h5">Doctor's Prescription</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-7">
                            <div class="form-group-select">
                                <label for="" class="h5">Blood Group</label>
                                <select name="bgroup" id="" class="custom-select">
                                    <option value="A+">A+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="O+">O+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="B+">B+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mt-md-auto mt-4 ml-md-3">
                            <label for="" class="h5">Gender</label>
                            <div class="form-check-inline ml-3">
                                <input type="radio" class="form-check-input" value="male" id="male" name="Gender">
                                <label for="male" class="form-check-label">Male</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" value="female" id="female" name="Gender">
                                <label for="female" class="form-check-label">Female</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" value="other" id="other" name="Gender">
                                <label for="other" class="form-check-label">Other</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="h5">Full Name</label>
                                <input type="text" class="form-control" name="fname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="h5">Last Name</label>
                                <input type="text" class="form-control" name="lname">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="h5">DOB</label>
                                <input type="date" class="form-control" name="dob">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="h5">Phone</label>
                                <input type="number" class="form-control" name="phone">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="h5">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="h5">Age</label>
                                <input type="text" class="form-control" class="age" name="age">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="h5">City</label>
                                <input type="text" class="form-control" class="city" name="city">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="h5">Unit (in ml)</label>
                                <input type="number" class="form-control" name="unit">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 d-flex justify-content-center">
                            <div class="form-group" style="width:100%;">
                                <button name="request_blood" class="btn btn-dark btn-lg font-weight-bolder"
                                    style="width:100%;">REQUEST</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>