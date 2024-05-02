<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.css">
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
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script> 
</head>

<body>
<?php
    session_start();
        if(!isset($_SESSION['user'])){
            header("Location:index.php");
            die();
        }
    ?>
    <div class="container mt-md-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 rounded text-white bg-dark text-white">
                <form action="check_login.php" method="post" class="ml-md-5 mt-4 p-5" onsubmit="return formValidation()">
                    <div class="form-row mb-3">
                        <div class="col-md-10">
                            <div class="form-group-select">
                                <select name="" id="" class="custom-select h3 text-dark">
                                    <!-- <option value="">Donor</option> -->
                                    <option value="">User (Blood Needer)</option>
                                </select>
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
                                <input type="email" class="form-control" id="email1" placeholder="Enter your email" name="email">
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
                                <input type="password" name="password" class="form-control" id="pwd1" placeholder="Enter your password">
                            </div>
                        </div>
                    </div>
                    <div class="div text-center mb-2">
                        <button name="submit_user_login" class="btn btn-outline-light btn-lg ml-md-n5 mb-2 font-weight-bolder">SUBMIT</button><br>
                        <a href="" class="ml-md-n5 text-white">Forget Password?</a>
                    </div>
                </form>
            </div>
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
    </script>
</body>

</html>