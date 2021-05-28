<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GE ABOUT</title>
    <!--Header Template-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png">
    <!--Reset-->
    <link rel="stylesheet" href="css/reset.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Our style-->
    <link rel="stylesheet" href="css/styles.css">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<!--Header-->
<?php
include 'templates/header.php';
?>
<!----Meet the team---->
<div class="container-fluid padding myLinearColour">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Meet the Team</h1>
        </div>
        <hr>
    </div>
    </div>
<!---Cards--->
<div class="container-fluid padding myLinearColour">
    <div class="row padding">
        <div class ="col-md-3">
            <div class="card">
                <img class="card-img-top" src="img/team/Harry.jpg" alt="Harry" style="height: 500px; object-fit: cover;">
                <div class="card-body">
                    <h4 class="card-title">Theocharis Angelidis</h4>
                    <p class="card-text">Theocharis Angelidis , AEM 2503</p>
                </div>
            </div>
        </div>
        <div class ="col-md-3">
            <div class="card">
                <img class="card-img-top" src="img/team/Alexandros.jpg" alt="Alexandros" style="height: 500px; object-fit: cover;">
                <div class="card-body">
                    <h4 class="card-title">Alexandros Mpildiris</h4>
                    <p class="card-text">Alexandros Mpildiris  , AEM 3245</p>
                </div>
            </div>
        </div>
        <div class ="col-md-3">
            <div class="card">
                <img class="card-img-top" src="img/team/Ioanniss.jpg" alt="Ioannis" style="height: 500px; object-fit: cover;">
                <div class="card-body">
                    <h4 class="card-title">Ioannis Anthoulis</h4>
                    <p class="card-text">Ioannis Anthoulis, AEM 2966</p>
                </div>
            </div>
        </div>
        <div class ="col-md-3">
            <div class="card">
                <img class="card-img-top" src="img/team/Nikos.jpg" alt="Nikolaos" style="height: 500px; object-fit: cover;">
                <div class="card-body">
                    <h4 class="card-title">Nikolaos Zoros</h4>
                    <p class="card-text">Nikolaos Zoros , AEM 3533</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include "templates/footer.php";
?>