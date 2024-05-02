<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
        integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" -->
    integrity = "sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin = "anonymous" >
    </script>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .menu {
        list-style: none;
    }

    .menu li {
        display: inline-block;
    }

    .menu li a {
        font-size: x-large;
        margin-right: 30px;
        color: white;
    }

    .carousel-inner:after {
        background-color: red;
        position: absolute;
    }

    .links {
        color: white;
        e text-decoration: none;
        font-size: x-large;
    }

    .links:hover {
        color: #DF3C5F;
    }

    .nav-link {
        font-size: x-large;
        margin-right: 10px;
        color: white;
    }

    .nav-link:hover {
        color: white;
        background-color: grey;
        text-align: center;
    }

    /* .login{
        margin-left:34em;
    } */


    .card-body {
        /* background-color:yellow; */
        height: 280px;
        overflow: hidden;
    }

    .card-img {
        height: 100%;
    }
    </style>
</head>

<body>
    <?php
    session_start();
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <nav class="navbar fixed-top navbar-expand-lg navbar-light p-0 px-3" style="background-color:#DF3C5F;">
                    <a href="images/certification.png" class="navbar-brand">
                        <img src="images/certification.png" alt="" class="img-fluid rounded-circle" width="125px">
                    </a>

                    <button class="navbar-toggler" data-toggle="collapse" data-target="#mynav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mynav">
                        <ul class="navbar-nav nav-pills mr-auto">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link text-white">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a href="#benefits" class="nav-link text-white">BENEFITS</a>
                            </li>
                            <li class="nav-item">
                                <a href="#events" class="nav-link text-white">EVENTS</a>
                            </li>
                            <li class="nav-item">
                                <a href="#feedbacks" class="nav-link text-white">FEEDBACKS</a>
                            </li>
                            <li class="nav-item">
                                <a href="#about_us" class="nav-link text-white">CONTACT US</a>
                            </li>
                        </ul>
                        <button class="btn btn-dark btn-lg p-3 ml-md-none ml-n1 mb-2 login" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">LOGIN</button>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-3" id="exampleModalLabel">Login Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-10 rounded text-white bg-dark text-white">
                                <form action="home_page_login.php" method="post" class="ml-md-5 mt-4" onsubmit="return formValidation()">
                                    <div class="form-row mb-3">
                                    <div class="col-md-10">
                                            <!-- <label for="" class="mr-md-3 h5">Select</label><br> -->
                                            <div class="form-check-inline">
                                                <input type="radio" class="form-check-input" value="Donor" id="donor" name="opt_select">
                                                <label for="donor" class="form-check-label">Donor</label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input type="radio" class="form-check-input" id="blood_needer" value="User" name="opt_select">
                                                <label for="blood_needer" class="form-check-label">User(Blood_Needer)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-10 mb-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="bi bi-envelope-at-fill"></i>
                                                    </div>
                                                </div>
                                                <input type="email" class="form-control" id="email1" name="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-10 mb-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="bi bi-file-lock2-fill"></i>
                                                    </div>
                                                </div>
                                                <input type="password" class="form-control" id="pwd1" name="pass">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div text-center mb-2">
                                        <input type="submit"
                                            class="btn btn-outline-light btn-lg ml-md-n5 mb-2 font-weight-bolder"><br>
                                        <a href="" class="ml-md-n5 text-white">Forget Password?</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- <div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Save changes</button>
</div> -->
                </div>
            </div>
        </div>
    </div>



    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1">
            </button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/Donor-img.jpg" class="d-block w-100" alt="..." height="650px">
                <div class="carousel-caption d-block">
                    <h5>To become a donor click the below button</h5>
                    <p><button class="btn btn-lg btn-outline-light font-weight-bolder" data-bs-toggle="modal"
                            data-bs-target="#exampleModal1">BE A DONOR</button></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/child2.jpg" class="d-block w-100" alt="..." height="650px">
                <div class="carousel-caption d-block">
                    <h5>To become a user click the below button</h5>
                    <p><button class="btn btn-lg btn-outline-light font-weight-bolder" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2">BE A USER</button></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <!-- Modal 1 -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-3" id="exampleModalLabel">Donor Registration</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container rounded">
                        <div class="row">
                            <div class="col-12 text-white" style="background-color:#DF3C5F;">
                                <form action="add_registration_records.php" method="post" class="ml-md-4 mt-4"
                                    onsubmit="return don_formValidation()">
                                    <div class="form-row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="" class="h5">Name</label>
                                                <input type="text" class="form-control" id="don_name" name="Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="" class="h5">Email</label>
                                                <input type="email" class="form-control" id="don_email" name="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="" class="h5">Username</label>
                                                <input type="text" class="form-control" id="don_uname" name="Username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mt-2 mb-2">
                                        <div class="col-md-10">
                                            <label for="" class="mr-md-3 mr-1 h5">Gender</label>
                                            <div class="form-check-inline">
                                                <input type="radio" class="form-check-input" value="Male" id="male" name="Gender"
                                                    checked>
                                                <label for="male" class="form-check-label">Male</label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input type="radio" class="form-check-input" id="female" value="Female" name="Gender">
                                                <label for="female" class="form-check-label">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="" class="h5">Password</label>
                                                <input type="password" class="form-control" id="don_pwd"
                                                    name="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-10">
                                            <div class="form-group-select mt-3">
                                                <label for="" class="h5">City</label>
                                                <select name="City" id="" class="text-dark h4 custom-select">
                                                    <option value="Ahmedabad" selected>Ahmedabad</option>
                                                    <option value="Surat">Surat</option>
                                                    <option value="Vadodara">Vadodara</option>
                                                    <option value="Rajkot">Rajkot</option>
                                                    <option value="Gandhinagar">Gandhinagar</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="" class="h5">Phone</label>
                                                <input type="number" class="form-control" id="don_phone" name="Phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="" class="h5">DOB</label>
                                                <input type="date" class="form-control" id="don_dob" name="Dob">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="div text-center">
                                        <br><a href="" class="ml-md-n5 text-white">Back to home page</a>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" name="submit_donor">
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -------------------------------------- -->

    <!-- Modal 2-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-3" id="exampleModalLabel">User Registration</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container rounded">
                        <div class="row">
                            <div class="col-12 text-white" style="background-color:#DF3C5F;">
                                <form action="add_registration_records.php" method="post" class="ml-md-4 mt-4"
                                    onsubmit="return usr_formValidation()">
                                    <div class="form-row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="" class="h5">Name</label>
                                                <input type="text" class="form-control" id="usr_name" name="Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="" class="h5">Email</label>
                                                <input type="email" class="form-control" id="usr_email" name="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="" class="h5">Username</label>
                                                <input type="text" class="form-control" id="usr_uname" name="Username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mt-2 mb-2">
                                        <div class="col-md-10">
                                            <label for="" class="mr-md-3 mr-1 h5">Gender</label>
                                            <div class="form-check-inline">
                                                <input type="radio" class="form-check-input" id="male" name="Gender"
                                                value="Male" checked>
                                                <label for="male" class="form-check-label">Male</label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input type="radio" class="form-check-input" id="female" value="Female"name="Gender">
                                                <label for="female" class="form-check-label">Female</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-10">
                                            <div class="form-group-select mt-3">
                                                <label for="" class="h5">City</label>
                                                <select name="City" id="" class="text-dark h4 custom-select">
                                                    <option value="" selected>Ahmedabad</option>
                                                    <option value="">Surat</option>
                                                    <option value="">Vadodara</option>
                                                    <option value="">Rajkot</option>
                                                    <option value="">Gandhinagar</option>
                                                </select>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="" class="h5">Password</label>
                                                <input type="password" class="form-control" id="usr_pwd" name="Password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="" class="h5">Phone</label>
                                                <input type="number" class="form-control" id="usr_phone" name="Phone">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="" class="h5">DOB</label>
                                                <input type="date" class="form-control" id="usr_dob" name="Dob">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="div text-center">
                                        <br><a href="" class="ml-md-n5 text-white">Back to home page</a>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" name="submit_user">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------------------------------- -->


    <h2 class="mt-4 font-weight-bold text-center display-4" id="benefits" style="color:#DF3C5F;">Blood Donation Benefits
    </h2>
    <div class="container mb-5">
        <div class="row mt-4">
            <div class="col-lg-4 mb-lg-none mb-3 ">
                <div class="card shadow rounded">
                    <div class="card-body">
                        <h4 class="card-title">1. Giving blood can reveal potential health problems</h4>
                        <p class="card-text">Here someone will check your
                            pulse, Blood pressure, body temperature, hemoglobin ,etc. This can sometimes shed light on
                            issues you
                            didn't even know about.</p>
                        <a href="" class="card=link"><button class="btn btn-primary">Read More</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-lg-none mb-3">
                <div class="card shadow rounded">
                    <div class="card-body">
                        <h4 class="card-title">2. Giving blood can reduce harmful iron stores</h4>
                        <p class="card-text">One in every two hundred people in the U.S. is affected by a condition
                            called hemochromatosis.<br>It is a disesase where iron levels are very high. Which can be
                            reduced with Blood-Donation.<br></p>
                        <a href="" class="card=link"><button class="btn btn-primary">Read More</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-lg-none mb-3">
                <div class="card shadow rounded">
                    <div class="card-body">
                        <h4 class="card-title">3. Giving blood may lower your risk of suffering a heart attack</h4>
                        <p class="card-text">Donating blood at least once a year could reduce your risk of a heart
                            attack by 88 percent. Regular blood donation is linked to lower blood pressure and a lower
                            risk for heart attacks</p>
                        <a href="" class="card=link"><button class="btn btn-primary">Read More</button></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col-lg-4 mb-lg-none mb-3 ">
                <div class="card shadow rounded">
                    <div class="card-body">
                        <h4 class="card-title">4. Giving blood may reduce risk of developing cancer</h4>
                        <p class="card-text">In an average completely healthy person link between giving blood and
                            decreased cancer risk is slim. Phlebotomy was found to be an iron reduction method that is
                            associated with lower cancer risk and mortality</p>
                        <a href="" class="card=link"><button class="btn btn-primary">Read More</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-lg-none mb-3">
                <div class="card shadow rounded">
                    <div class="card-body">
                        <h4 class="card-title">5. Giving blood can help your liver stay healthy</h4>
                        <p class="card-text">Though there are many other factors involved in
                            lever related problems, donating blood can help relieve some of those iron stores and avoid
                            extra issues in
                            your liver.</p>
                        <a href="" class="card=link"><button class="btn btn-primary">Read More</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-lg-none mb-3">
                <div class="card shadow rounded">
                    <div class="card-body">
                        <h4 class="card-title">6. Giving blood can help your mental state</h4>
                        <p class="card-text">While there are several physical benefits to donating blood, the most
                            powerful health benefit is arguably in
                            the psychological realm. It also helps to lower Depression</p>
                        <a href="" class="card=link"><button class="btn btn-primary">Read More</button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <h2 class="my-2 font-weight-bold text-center display-4" style="color:#DF3C5F;">How Donation<br> Can Be Done?
    </h2>
    <div class="conatiner mb-5" style="background-color:#E1E5EB;">
        <div class="row p-3 justify-content-center align-items-center">

            <div class="col-xl-4 mt-3">
                <div class="card shadow-lg">
                    <div class="row no-gutters">
                        <div class="col-5">
                            <img src="images/reg_img.jpg" alt="" width="220px" height="220px" class="card-img">
                        </div>
                        <div class="col-7">
                            <div class="card-body text-justify">
                                <h4 class="card-title">1) Registration</h4>
                                <p class="card-text text-justify">You have to register yourself first through our
                                    website .<br>
                                    After registration you'll read some information about Blood Donation.<br>
                                    <a href="#">Register</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 mt-3">
                <div class="card shadow-lg">
                    <div class="row no-gutters">
                        <div class="col-5">
                            <img src="images/health_history.jfif" alt="" width="220px" height="220px" class="card-img">
                        </div>
                        <div class="col-7">
                            <div class="card-body text-justify">
                                <h4 class="card-title">2) Health History</h4>
                                <p class="card-text text-justify">You have to fill your health details .<br>
                                    Then you have to answer serval questions for validation about your medications .
                                    You have to submit your recent Blood Report . <br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 mt-3">
                <div class="card shadow-lg">
                    <div class="row no-gutters">
                        <div class="col-5">
                            <img src="images/date_time1.png" alt="" width="220px" height="220px" class="card-img">
                        </div>
                        <div class="col-7">
                            <div class="card-body text-justify">
                                <h4 class="card-title">3) Select Event-date & Time</h4>
                                <p class="card-text text-justify"> You can select date and time of donation as per your
                                    convienience. Selection of Date and Time is done as per availability at particular
                                    event address. <br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 mt-3">
                <div class="card shadow-lg">
                    <div class="row no-gutters">
                        <div class="col-5">
                            <img src="images/Donation_img.jfif" alt="" width="220px" height="220px" class="card-img">
                        </div>
                        <div class="col-7">
                            <div class="card-body text-justify">
                                <h4 class="card-title">4) Donation</h4>
                                <p class="card-text text-justify">Firstly we'll cleanse an area on your arm and insert a
                                    new sterile needle for
                                    the blood draw. Whole Process takes about 8-10 minutes, during which you'll be
                                    seated comfortably or lying
                                    down.<br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 mt-3">
                <div class="card shadow-lg">
                    <div class="row no-gutters">
                        <div class="col-5">
                            <img src="images/certification.png" alt="" width="220px" height="220px" class="card-img">
                        </div>
                        <div class="col-7">
                            <div class="card-body text-justify">
                                <h4 class="card-title">5) Certification</h4>
                                <p class="card-text text-justify">After successfull donation of blood, a certificate is
                                    generated
                                    which can be accessible through the website . <br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <h2 class="my-2 font-weight-bold text-center display-4" style="color:#DF3C5F;">How To<br> Get Blood?</h2>
        <div class="conatiner mb-5" style="background-color:#E1E5EB;">
            <div class="row row-col-4 p-3 justify-content-center align-items-center">

                <div class="col-md-5 text-justify mb-2">
                    <div class="card shadow-lg">
                        <div class="row no-gutters">
                            <div class="col-5">
                                <img src="images/reg_img.jpg" alt="" width="220px" height="220px" class="card-img">
                            </div>
                            <div class="col-7">
                                <div class="card-body text-justify">
                                    <h4 class="card-title">1) Registration</h4>
                                    <p class="card-text text-justify">You have to register yourself first through our
                                        website .
                                        After registration process you can find a blood .<br>
                                        Click here to <a href="">Register</a><br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 text-justify mb-2">
                    <div class="card shadow-lg">
                        <div class="row no-gutters">
                            <div class="col-5">
                                <img src="images/search_blood.jfif" alt="" width="220px" height="220px"
                                    class="card-img">
                            </div>
                            <div class="col-7">
                                <div class="card-body text-justify">
                                    <h4 class="card-title">2. Search for Blood</h4>
                                    <p class="card-text text-justify">Search for blood type you want .<br>
                                        Available Bloods are shown on the screen .
                                        You have to select a particular blood types .<br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 text-justify mb-2">
                    <div class="card shadow-lg">
                        <div class="row no-gutters">
                            <div class="col-5">
                                <img src="images/payment.jfif" alt="" width="220px" height="220px" class="card-img">
                            </div>
                            <div class="col-7">
                                <div class="card-body text-justify">
                                    <h4 class="card-title">3. Make Payment</h4>
                                    <p class="card-text text-justify">After selecting blood type and quantity required
                                        the payment page will open.<br>
                                        Now you have to make payment according to the blood value generated at your
                                        screen .<br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 text-justify mb-2">
                    <div class="card shadow-lg">
                        <div class="row no-gutters">
                            <div class="col-5">
                                <img src="images/get_blood.jfif" alt="" width="220px" height="220px" class="card-img">
                            </div>
                            <div class="col-7">
                                <div class="card-body text-justify">
                                    <h4 class="card-title">4. Get Blood</h4>
                                    <p class="card-text text-justify">After successfull payment you can get your blood
                                        from the Event address mentioned on the website.<br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <h2 class="my-2 font-weight-bold text-center display-4" id="events" style="color:#DF3C5F;">Latest Event Posts
        </h2>
        <div class="container-fluid">
            <div class="row mt-3 bg-info">
                <div class="col-md-1 p-md-2 text-white" style="background-color:#DF3C5F;">
                    <p class="h5">20/12<br> 5:00pm </p>
                </div>
                <div class="col-8 text-justify text-white h5">
                    A-101, Red Lab Nr.Bus Stand Naroda-Patiya Circle, Ahmedabad-382345.
                    <br> <a href="" class="">Read More</a>
                </div>
            </div>
            <div class="row mt-3 bg-info">
                <div class="col-md-1 p-md-2 text-white" style="background-color:#DF3C5F;">
                    <p class="h5">10/10<br> 7:00pm </p>
                </div>
                <div class="col-8 text-justify text-white h5">
                    B-204, Red Lab Nr. Royal Arcade Sanjeevni Hospital, Ahmedabad-382330.
                    <br> <a href="" class="">Read More</a>
                </div>
            </div>
            <div class="row mt-3 bg-info">
                <div class="col-md-1 p-md-2 text-white " style="background-color:#DF3C5F;">
                    <p class="h5"> 25/11<br> 4:00pm </p>
                </div>
                <div class="col-8 text-justify text-white h5">
                    302, Red Lab Nr.Police Station Sardarnagar, Ahmedabad-382475.
                    <br> <a href="" class="">Read More</a>
                </div>
            </div>
        </div>

        <h2 class="mt-5 mb-3 font-weight-bold text-center display-4" id="feedbacks" style="color:#DF3C5F;">
            Feedbacks
            & Reviews</h2>
        <div class="container">
            <div class="row justify-content-around my-3">
                <div class="col-md-2">
                    <img src="images/girl1.jpg" alt="not-found" width="100px" class="rounded-circle"><br>Gaurav
                    Bhatia<br>8
                    november 2022
                </div>
                <div class="col-md-9 bg-info text-white text-justify p-2 h5">
                    Blood donation is a wonderful activity! It is almost a shame that the mandatory interval between
                    donations is so long.
                </div>
            </div>
            <div class="row justify-content-around my-3">
                <div class="col-md-2">
                    <img src="images/girl1.jpg" alt="not-found" width="100px" class="rounded-circle"><br>Bhavesh
                    Balani<br>20
                    november 2022
                </div>
                <div class="col-md-9 bg-info text-white text-justify p-2 h5">
                    The Blood Service has better customer service than any other place. I’m treated like a queen there.
                    Thank you so much!
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-2">
                    <img src="images/girl1.jpg" alt="not-found" width="100px" class="rounded-circle"><br>Neel
                    Bamania<br>28
                    december 2022
                </div>
                <div class="col-md-9 bg-info text-white text-justify p-2 h5">
                    The entire staff are nice and friendly, and really professional. I always leave the place in very
                    high spirits. It makes you want to come back.
                </div>
            </div>
        </div>
        <div class="container-fluid text-bg-dark text-white mt-5" id="about_us">
            <div class="row justify-content-around pt-5">
                <div class="col-lg-3 mb-lg-none mb-4">
                    <h3><i class="bi bi-telephone-outbound-fill"></i></h3>
                    <h4> Emergency Calling <br> +91-8887774440</h4>
                </div>
                <div class="col-lg-2 mb-lg-none mb-4">
                    <h3><i class="bi bi-envelope-at"></i></h3>
                    <h4> E-mail Us <br> abc@gmail.com</h4>
                </div>
                <div class="col-lg-3">
                    <h3><i class="bi bi-telephone-outbound-fill"></i></h3>
                    <h4> Let's Connect<br>&nbsp;<i class="bi bi-facebook"></i>&nbsp;&nbsp;<i
                            class="bi bi-twitter"></i>&nbsp;&nbsp;<i class="bi bi-whatsapp"></i>&nbsp;&nbsp;<i
                            class="bi bi-instagram"></i> </h4>
                </div>
            </div>


            <div class="row justify-content-around pt-5">
                <div class="col-xl-3 mb-xl-none mb-2">
                    <h2><i class="bi bi-flower2"></i></h2>
                    <h4> BDMS </h4>
                    <br>
                    <h5>
                        Blood Donation Management System is a management system website that enables individuals who
                        want to donate blood to help the needy.
                    </h5>
                </div>
                <div class="col-xl-2">
                    <h2><i class="bi bi-link"></i></h2>
                    <a class="links text-decoration-none"> Quick Link </a><br>
                    <a class="links text-decoration-none"> Home </a><br>
                    <a class="links text-decoration-none"> About Us </a><br>
                    <a class="links text-decoration-none"> Events </a><br>
                    <a class="links text-decoration-none"> Blog </a><br>
                    <a class="links text-decoration-none"> Contact </a>
                </div>
                <div class="col-xl-3">
                    <form class="bg-white text-dark rounded p-5 mb-4 mt-md-none mt-3">
                        <h5>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                                <br>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-dark">Submit</button>
                        </h5>
                    </form>
                </div>
            </div>

            <script>
            function formValidation() {
                // login
                email = document.getElementById('email1');
                pwd = document.getElementById('pwd1');

                if (email.value == null || email.value == "") {
                    alert('Email is required');
                    email.focus();
                    return false;
                } else if (pwd.value.length < 6) {
                    alert('Password should not be less than 6 characters');
                    pwd.focus();
                    return false;
                }
            }

            function don_formValidation() {
                //donor
                don_name = document.getElementById('don_name');
                don_email = document.getElementById('don_email');
                don_uname = document.getElementById('don_uname');
                don_pwd = document.getElementById('don_pwd');
                don_phone = document.getElementById('don_phone');
                don_dob = document.getElementById('don_dob');

                if (don_name.value == "") {
                    alert('Name should not be Empty');
                    don_name.focus();
                    return false;
                } else if (don_email.value == "") {
                    alert('Email should not be Empty');
                    don_email.focus();
                    return false;
                } else if (don_uname.value == "") {
                    alert('Username should not be Empty');
                    don_uname.focus();
                    return false;
                } else if (don_dob.value == "") {
                    alert('Dob should not be Empty');
                    don_dob.focus();
                    return false;
                } else if (don_phone.value.length != 10) {
                    alert('Phone number should be of 10 digits.')
                    don_phone.focus();
                    return false;
                } else if (don_pwd.value.length < 6) {
                    alert('Password should not be less than 6 characters');
                    don_pwd.focus();
                    return false;
                }
            }

            function usr_formValidation() {
                //user
                usr_name = document.getElementById('usr_name');
                usr_email = document.getElementById('usr_email');
                usr_uname = document.getElementById('usr_uname');
                usr_pwd = document.getElementById('usr_pwd');
                usr_phone = document.getElementById('usr_phone');
                usr_dob = document.getElementById('usr_dob');
                if (usr_name.value == "") {
                    alert('Name should not be Empty');
                    usr_name.focus();
                    return false;
                } else if (usr_email.value == "") {
                    alert('Email should not be Empty');
                    usr_email.focus();
                    return false;
                } else if (usr_uname.value == "") {
                    alert('Username should not be Empty');
                    usr_uname.focus();
                    return false;
                } else if (usr_dob.value == "") {
                    alert('Dob should not be Empty');
                    usr_dob.focus();
                    return false;
                } else if (usr_phone.value.length != 10) {
                    alert('Phone number should be of 10 digits.')
                    usr_phone.focus();
                    return false;
                } else if (usr_pwd.value.length < 6) {
                    alert('Password should not be less than 6 characters');
                    usr_pwd.focus();
                    return false;
                }
            }
            </script>

</body>

</html>