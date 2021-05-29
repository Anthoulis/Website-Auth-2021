<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gender Equality</title>
    <!--Header Template-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png">
    <!--Our style-->
    <link rel="stylesheet" href="css/reset.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/styles.css">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<!--Header-->
<?php
include 'templates/header.php';
?>
<!--Form-->
<section class="sectionLogIn">
<h2>Log In</h2>
<form>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Log in</button>
</form>
</section>

<div style="border-style:solid; border-color:black; border-width:1px;"></div>

<section class="sectionSingUp">
<h2>Sing Up</h2>
<form>
<label for="exampleInputEmail1">First Name</label>
<label for="exampleInputEmail1">Last Name</label>
    <div class="form-row">
        <input type="text" class="form-control" placeholder="First name" style="margin-left: auto; margin-right:10px">
        <input type="text" class="form-control" placeholder="Last name"  style="margin-right: auto;">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Repeat Password">
    </div>
    <button type="submit" class="btn btn-primary">Sing Up</button>
</form>
</section>
<?php
include 'templates/footer.php';
?>