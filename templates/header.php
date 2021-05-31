<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png">
    <title><?php echo $title ?></title>
    <!--Reset-->
    <link rel="stylesheet" href="css/reset.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  
    <!--Our style-->
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/loginForm.css">
    <link rel="stylesheet" href="css/styles.css">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <!--Logo-->
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo" height="10%" width="40px">  Gender Equality</a>
        <!--Button when collapsed-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--navbarNav-->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li ><input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"></li>
                <li class="nav-item">
                    <a href="loginSignup.php"><button type="button" class="btn btn-outline-secondary " >  Log In  </button></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!--Header-->