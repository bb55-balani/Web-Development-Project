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
    #userImg{
        background-size:cover;
        /* border:2px solid red; */
        height:100%;
    }
    .modal-backdrop
{
display:none;
visibility:hidden; 
position:relative
}
    </style>
</head>

<body>
<?php
    session_start();
        if(!isset($_SESSION['user'])){
            header("Location:index.php");
            die();
        }
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <nav class="navbar fixed-top navbar-expand-lg navbar-light p-0 px-2 rounded"
                    style="background-color:#DF3C5F;">
                    <a href="" class="navbar-brand">
                        <img src="images/certification.png" alt="" class="img-fluid rounded-circle" width="125px">
                    </a>

                    <button class="navbar-toggler" data-toggle="collapse" data-target="#mynav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mynav">
                        <ul class="navbar-nav nav-pills mr-auto">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link text-white">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link text-white">Blood History</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link text-white">Payments</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link text-white">Feedback</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link text-white">About us</a>
                            </li>
                        </ul>
                        <!-- <button class="btn btn-dark btn-lg p-3 ml-md-none ml-n1 mb-2">LOGOUT</button> -->
                        <button type="button" class="btn btn-dark btn-lg font-weight-bolder font-size-larger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            LOGOUT
                        </button>
                        <!--Logout Modal -->
                        <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true" data-backdrop="false">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Logout</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure want to logout ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">
                                           <a href="index.php" class="text-white" style="text-decoration:none">Okay!</a>
                                        </button>
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                            <?php
                                            //  session_destroy();
                                            ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <div class="container-fluid mt-2">
        <div class="row no-gutters">
            <div class="col-lg-8 bg-dark text-white rounded mt-lg-none mt-2 p-2">
                <p class="display-3 ml-2">
                    GET BLOOD<i class="bi bi-droplet display-2"></i>
                </p>
                <p class="ml-2">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis, dicta eligendi dolor non
                    exercitation8em aliquid labore aspernatur qui velit omnis reprehenderit corporis explicabo. Rem,
                    tempore. ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus repellat quibusdam dolore
                    ipsum deserunt tempore ratione eligendi nam fuga id!
                    <br><br>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus consequuntur eveniet veniam
                    necessitatibus commodi magnam nulla nemo odit vitae voluptatum.
                </p>
                <a href="blood_request_form.php"><button class="ml-2 btn btn-success btn-lg mr-3 mb-xl-2 mb-2">GET BLOOD</button><button
                        class="btn btn-danger btn-lg mb-2">Get Help!</button></a>
            </div>
            <div class="col-lg-4 mt-lg-none mt-2">
                <img src="images/child1.jpg" alt="" class="img-fluid rounded" id="userImg" width="100%">
            </div>
        </div>
    </div>
    <br><br>
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-xl-3 mb-lg-none mb-3">
                <div class="card shadow rounded">
                    <div class="card-img-top">
                        <img src="images/bld4_img.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Donation</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis, illum?
                            ipsum dolor sit amet, consectetur adipisicing elit. Id iusto optio illum dignissimos, libero
                            distinctio ullam praesentium provident at officiis?</p>
                        <a href="" class="card=link"><button class="btn btn-primary">Read More</button></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-lg-none mb-3">
                <div class="card shadow rounded">
                    <div class="card-img-top">
                        <img src="images/bld4_img.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Donation</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis, illum?
                            ipsum dolor sit amet, consectetur adipisicing elit. Id iusto optio illum dignissimos, libero
                            distinctio ullam praesentium provident at officiis?</p>
                        <a href="" class="card=link"><button class="btn btn-primary">Read More</button></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-lg-none mb-3">
                <div class="card shadow rounded">
                    <div class="card-img-top">
                        <img src="images/bld4_img.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Donation</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis, illum?
                            ipsum dolor sit amet, consectetur adipisicing elit. Id iusto optio illum dignissimos, libero
                            distinctio ullam praesentium provident at officiis?</p>
                        <a href="" class="card=link"><button class="btn btn-primary">Read More</button></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-lg-none mb-3">
                <div class="card shadow rounded">
                    <div class="card-img-top">
                        <img src="images/bld4_img.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Donation</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis, illum?
                            ipsum dolor sit amet, consectetur adipisicing elit. Id iusto optio illum dignissimos, libero
                            distinctio ullam praesentium provident at officiis?</p>
                        <a href="" class="card=link"><button class="btn btn-primary">Read More</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container-fluid mt-2">
        <div class="row d-flex justify-content-center rounded">
            <div class="col-lg-7 rounded shadow-lg text-white" style="background:url(images/girl1.jpg);" >
            </div>
            <div class="col-lg-4 text-white rounded" style="background-color:#DF3C5F;">
                <form action="" method="post" class="ml-md-4 mt-4">
                    <div class="form-row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="" class="h5">Message</label>
                                <textarea name="" id="" cols="3" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="" class="h5">Rating's(1-to-5)</label>
                                <input type="number" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="div text-center">
                        <button class="btn btn-outline-light btn-lg ml-md-n5 mb-2 font-weight-bolder">Give
                            Feedback</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <h2 class="mt-5 mb-3 font-weight-bold text-center display-4" style="color:#DF3C5F;">
        Feedbacks
        & Reviews</h2>
    <div class="container">
        <div class="row justify-content-around my-3">
            <div class="col-md-2">
                <img src="images/girl1.jpg" alt="not-found" width="100px" class="rounded-circle"><br>Gaurav
                Bhatia<br>8
                november 2022
            </div>
            <div class="col-md-10 bg-info text-white text-justify p-2">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam excepturi temporibus quis.
                Magnam
                odio
                itaque eum neque enim unde, sunt saepe dignissimos quibusdam illo voluptatibus! Saepe placeat
                veniam
                porro expedita officiis aliquam accusamus vitae laudantium.
            </div>
        </div>
        <div class="row justify-content-around my-3">
            <div class="col-md-2">
                <img src="images/girl1.jpg" alt="not-found" width="100px" class="rounded-circle"><br>Gaurav
                Bhatia<br>8
                november 2022
            </div>
            <div class="col-md-10 bg-info text-white text-justify p-2">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam excepturi temporibus quis.
                Magnam
                odio
                itaque eum neque enim unde, sunt saepe dignissimos quibusda m illo voluptatibus! Saepe placeat
                veniam
                porro expedita officiis aliquam accusamus vitae laudantium.
            </div>
        </div>
        <div class="row justify-content-around">
            <div class="col-md-2">
                <img src="images/girl1.jpg" alt="not-found" width="100px" class="rounded-circle"><br>Gaurav
                Bhatia<br>8
                november 2022
            </div>
            <div class="col-md-10 bg-info text-white text-justify p-2">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam excepturi temporibus quis.
                Magnam
                odio
                itaque eum neque enim unde, sunt saepe dignissimos quibusdam illo voluptatibus! Saepe placeat
                veniam
                porro expedita officiis aliquam accusamus vitae laudantium.
            </div>
        </div>
    </div>
    
    <div class="container-fluid text-bg-dark text-white mt-5">
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
                <h4> BDMS <br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, magnam. ipsum dolor
                    sit
                    amet consectetur adipisicing elit. Inventore, voluptas! ipsum dolor sit amet consectetur
                    adipisicing
                    elit. Id, possimus!</h4>
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
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone
                                    else.
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-dark">Submit</button>
                    </h5>
                </form>
            </div>
        </div>
</body>
</html>