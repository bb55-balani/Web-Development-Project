<?php 
session_start();
?>
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
    if(!isset($_SESSION['donor'])){
        header("Location:index.php");
        die();
    }
?>
<body style="background-color:gray;">
    <div class="container shadow-lg bg-white rounded mt-md-2">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 mt-3">
                <img src="images/certification.png" alt="" class="img-fluid" id="head_img">
                <!-- <i class="bi bi-droplet display-1"></i> -->
            </div>
            <div class="col-lg-6 mt-3">
                <p class="display-4">Blood Donation Form</p>
                <p class="h5 text-muted">Confidential - Please answer the following questions correctly.This will help
                    to protect you and the patient who recives your blood.</p>
            </div>
        </div>
    </div>
    <div class="container rounded">
        <div class="row">
            <div class="col-12 text-white rounded" style="background-color:#DF3C5F;">
                <form action="add_health_form.php" method="post" class="ml-md-4 mt-4">
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
                                <input type="radio" class="form-check-input" id="male" value="male" name="Gender">
                                <label for="male" class="form-check-label">Male</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" id="female" value="female" name="Gender">
                                <label for="female" class="form-check-label">Female</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" id="other" value="other" name="Gender">
                                <label for="other" class="form-check-label">Other</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="h5">First Name</label>
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
                                <input type="text" class="form-control" name="age">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="" class="h5">Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="h5">City</label>
                                <input type="text" class="form-control" name="city">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="h5">Weight</label>
                                <input type="text" class="form-control" name="weight">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="h5">Pulse</label>
                                <input type="text" class="form-control" name="pulse">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="h5">Hb</label>
                                <input type="text" class="form-control" name="hb">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="h5">Bp</label>
                                <input type="text" class="form-control" name="bp">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="h5">Temparature</label>
                                <input type="text" class="form-control" name="temp">
                            </div>
                        </div>
                        <div class="col-md-4 ml-md-3 mt-md-none mt-md-3 mb-md-none mb-3">
                            <label for="" class="h5">Have you donated blood previously?</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="y" name="d_blood">
                                <label for="y" class="form-check-label">Yes</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="n" name="d_blood">
                                <label for="n" class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="" class="h5">When was the last time you donated blood?</label>
                                <input type="date" class="form-control" name="last_time">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-5 ml-1">
                            <div class="form-group">
                                <label for="" class="h5">In the last six months have you had any of following?</label>
                                <div class="form-check">
                                    <input type="checkbox" name="check1" id="tattoo" class="form-check-input">
                                    <label for="tattoo" class="form-check-label">Tattooing</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="check1" id="ear" class="form-check-input">
                                    <label for="ear" class="form-check-label">Ear piercing</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="check1" id="dental" class="form-check-input">
                                    <label for="dental" class="form-check-label">Dental extraction</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ml-md-5">
                            <div class="form-group">
                                <label for="" class="h5">Is there any history of surgery or blood transfusion in the
                                    past six months?</label>
                                <div class="form-check">
                                    <input type="checkbox" name="check2" id="major" class="form-check-input">
                                    <label for="major" class="form-check-label">Major</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="check2" id="minor" class="form-check-input">
                                    <label for="major" class="form-check-label">Minor</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="check2" id="b-trans" class="form-check-input">
                                    <label for="b-trans" class="form-check-label">Blood Transfusion</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-5 ml-1">
                            <div class="form-group">
                                <label for="" class="h5">Do you suffer from or have suffered from any of the following
                                    diseases?</label>
                                <div class="row">
                                    <div class="col-5">
                                        <div class="form-check">
                                            <input type="checkbox" name="check3" id="Heart" class="form-check-input">
                                            <label for="Heart" class="form-check-label">Heart Disease</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="check3" id="Cancer" class="form-check-input">
                                            <label for="Cancer" class="form-check-label">Cancer</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="check3" id="Diabetes" class="form-check-input">
                                            <label for="Diabetes" class="form-check-label">Diabetes</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="check3" id="Hepatitis"
                                                class="form-check-input">
                                            <label for="Hepatitis" class="form-check-label">Hepatitis</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="check3" id="Typhoid" class="form-check-input">
                                            <label for="Typhoid" class="form-check-label">Typhoid</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="check3" id="Lung" class="form-check-input">
                                            <label for="Lung" class="form-check-label">Lung Disease</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="check3" id="Tuberclosis"
                                                class="form-check-input">
                                            <label for="Tuberclosis" class="form-check-label">Tuberclosis</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="check3" id="Allergic" class="form-check-input">
                                            <label for="Allergic" class="form-check-label">Allergic Disease</label>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="form-check">
                                            <input type="checkbox" name="check3" id="Kidney" class="form-check-input">
                                            <label for="Kidney" class="form-check-label">Kidney Disease</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="check3" id="Epilepsy" class="form-check-input">
                                            <label for="Epilepsy" class="form-check-label">Epilepsy</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="check3" id="Jaundice" class="form-check-input">
                                            <label for="Jaundice" class="form-check-label">Jaundice</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="check3" id="Malaria" class="form-check-input">
                                            <label for="Malaria" class="form-check-label">Malaria</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="check3" id="Bleeding" class="form-check-input">
                                            <label for="Bleeding" class="form-check-label">Abnormal Bleeding
                                                Tendency</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="check3" id="Fainting" class="form-check-input">
                                            <label for="Fainting" class="form-check-label">Fainting Spell</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="check3" id="Transmitted"
                                                class="form-check-input">
                                            <label for="Transmitted" class="form-check-label">Sexually Transmitted
                                                Disease</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 ml-md-5">
                            <div class="form-group">
                                <label for="" class="h5">Are you taking or have taken any of these in the past 72
                                    hours?</label>
                                <div class="form-check">
                                    <input type="checkbox" name="check4" id="Antibiotics" class="form-check-input">
                                    <label for="Antibiotics" class="form-check-label">Antibiotics</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="check4" id="Steroids" class="form-check-input">
                                    <label for="Steroids" class="form-check-label">Steroids</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="check4" id="Aspirin" class="form-check-input">
                                    <label for="Aspirin" class="form-check-label">Aspirin</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="check4" id="Vaccinations" class="form-check-input">
                                    <label for="Vaccinations" class="form-check-label">Vaccinations</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="check4" id="Alcohol" class="form-check-input">
                                    <label for="Alcohol" class="form-check-label">Alcohol</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="check4" id="Rabies" class="form-check-input">
                                    <label for="Rabies" class="form-check-label">Dog bite Rabies Vaccine(1 year)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <div class="form-row d-flex justify-content-center" style="width:100%;">
                                <div class="col-md-12">
                                    <div class="form-group d-flex justify-content-center">
                                        <button name="donation_form" class="btn btn-dark btn-lg font-weight-bolder"
                                            style="width:100%;">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>