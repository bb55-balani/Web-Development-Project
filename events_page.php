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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
    .custom-select {
        font-size: x-large;
    }
    </style>
</head>

<body>
    <div class="container mt-5 border shadow">
        <div class="row bg-info text-white">
            <div class="col-md-3">
                <img src="images/blood_type.jpg" alt="" class="img-fluid ml-5" width="150px">
            </div>
            <div class="col-md-8 mt-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos modi laboriosam nostrum, est eligendi
                fugiat quaerat. Voluptas possimus aspernatur, tempora assumenda tempore excepturi. Hic deleniti
                voluptates explicabo ullam, maiores libero.
            </div>
        </div>
        <form action="check_events.php" method="post">
            <div class="row mt-4 d-dlex justify-content-center py-5">
                <div class="col-md-6">
                    <div class="form-group-select">
                        <label for="" class="display-4">Select address</label>
                        <select name="address" id="" class="custom-select">
                            <option value="White cross,patiya,ahmedabad.">White cross,patiya,kubernagar</option>
                            <option value="Red cross,shahibag,ahmedabad.">Red cross,shahibag,ahmedabad.</option>
                            <option value="Maa donation,opp. CG mall,ahmedabad.">Maa donation,opp. CG mall,ahmedabad.
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mt-4 d-dlex justify-content-center">
                <div class="col-md-6">
                <div class="form-group-select">
                        <label for="" class="display-4">Event Date</label>
                        <select name="event_date" id="" class="custom-select">
                            <option value="2023-02-08">2023-02-08</option>
                            <option value="2023-02-10">2023-02-10</option>
                            <option value="2023-02-15">2023-02-15</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mt-4 d-dlex justify-content-center">
                <div class="col-md-6">
                    <div class="form-group-select">
                        <label for="" class="display-4">Select timings</label>
                        <select name="timings" id="" class="custom-select">
                            <option value="10:00am">10:00am</option>
                            <option value="12:00pm">12:00pm</option>
                            <option value="3:00pm">3:00pm</option>
                            <option value="5:00pm">5:00pm</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mt-4 d-dlex justify-content-center">
                <div class="col-md-3">
                    <button class="btn btn-primary btn-lg mt-2 mb-3 ml-5" name="select_event">SUBMIT</button><br>
                    <a href="donor_page.php" class="">Click here to go to main page</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>