<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GE Log In</title>
    <!--Header Template-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png">
    <!--Our style-->
    <link rel="stylesheet" href="css/reset.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
    <section style="margin-top:100px; margin-left:100px">
        <h2>Log In</h2>
        <form action="login.inc.php" method="post">
            <input type="text" name="email" placeholder="Username/e-mail...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit">Log In</button>
        </form>
    </section>
</body>
</html>