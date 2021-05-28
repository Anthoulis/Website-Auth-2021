<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GE CONTACT</title>
    <!--Header Template-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png">
    <!--Our style-->
    <link rel="stylesheet" href="css/reset.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<!--Header-->
<?php
include 'templates/header.php';
?>
<section class="myLinearColour" style="padding-top: 100px;">
<h2 style="text-align: center;" >Express your thoughts , feelings , ideas freely.</h2>

<!----Contact Form---->
    <div class="d-flex justify-content-center padding row ">
        <div class="col-lg-4">
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="email" class="form-control" id="inputName" aria-describedby="emailHelp" placeholder="How we should call you">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="inputEmail">Password</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Where we could reach you">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Send a copy to yourself.</label>
            </div>

        </div>
        <div class="col-lg-6">
            <label for="exampleFormControlTextarea1">Your thoughts</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
            <br>
            <button id="submitButton" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
<!----Contact Form---->
</section>

<?php
    include "templates/footer.php";
?>