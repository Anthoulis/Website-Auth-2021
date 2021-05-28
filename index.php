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
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/styles.css">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<!--Header-->
<?php
include 'templates/header.php';
?>
<!--Articles-->
<section class="myLinearColour" 
style="padding-top: 80px; padding-left:20px; padding-right:40px; font-size:x-large; font-weight:bolder; color: white;">
        <!--Image and article-->
        <div class="row align-items-center" style= "padding-block: 20px;">
            
        <div class="container col-sm-12 col-md-5">
            <img src="img\3973992.jpg" alt="image" height="100%" width="100%">
        </div>
            <div class="col-sm-12 col-md-7 text-left">
                <p><strong style="font-size: xx-large;">Gender equality</strong> is not only a fundamental human right, but a necessary foundation 
                    for a peaceful, prosperous and sustainable world. There has been progress over the 
                    last decades: More girls are going to school, fewer girls are forced into early marriage,
                    more women are serving in parliament and positions of leadership,and laws are being
                    reformed to advance gender equality. Despite these gains, many challenges 
                    remain: discriminatory laws and social norms remain pervasive, women continue to be 
                    underrepresented at all levels of political leadership, and 1 in 5 women and girls 
                    between the ages of 15 and 49 report experiencing physical or sexual violence by an
                    intimate partner within a 12-month period.</p>
            </div>
        </div>
        
        <!--White border between articles-->
        <div style="border: 1px; border:solid; border-color:white;"></div>

        <!--Image and article-->
        <div class="row align-items-center" style= "padding-block: 20px;">
        
            <div class="container col-sm-12 col-md-5">
                <img src="img\3844041.jpg" alt="image" height="100%" width="100%">
            </div>
                <div class="col-sm-12 col-md-7 text-left">
                    <p>How COVID-19 pandemic has affected this problem!<br>
                        The effects of the COVID-19 pandemic could reverse the limited progress that has been made 
                        on gender equality and women’s rights.  The coronavirus outbreak exacerbates existing inequalities 
                        for women and girls across every sphere – from health and the economy, to security and social protection. 
                        Women play a disproportionate role in responding to the virus, including as frontline healthcare
                        workers and carers at home. Women’s unpaid care work has increased significantly as a result of school 
                        closures and the increased needs of older people. Women are also harder hit by the economic impacts of
                        COVID-19, as they disproportionately work in insecure labour markets. Nearly 60 per cent of women work
                        in the informal economy, which puts them at greater risk of falling into poverty.The pandemic has also 
                        led to a steep increase in violence against women and girls. With lockdown measures in place, many women
                        are trapped at home with their abusers, struggling to access services that are suffering from cuts and
                        restrictions. Emerging data shows that, since the outbreak of the pandemic, violence against women and 
                        girls – and particularly domestic violence – has intensified. </p>
                </div>
        </div>
</section>
<!--Videos and Graphs-->
<section class="myLinearColour" 
style="padding-top: 80px; padding-left:20px; padding-right:40px; font-size:x-large; font-weight:bolder; color: black;">
<div style="padding-top: 30px;">
    
        <div class="row align-items-center">
            <iframe class="col-md-6 " style="padding: 0; margin:0;"  src="https://www.youtube.com/embed/ZIATLVKZ_ag" height="500px" width="100%" title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe class="col-md-6"  style="padding: 0; margin:0;"  src="https://www.youtube.com/embed/X8TKIxNVbXc" height="500px" width="100%" title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
        <p style="padding-top: 80px; font-size:x-large; font-weight:bolder; color: white;"> The Gender Equality Index is a tool to measure the progress of gender equality in the EU,
        developed by EIGE. It gives more visibility to areas that need improvement and ultimately
        supports policy makers to design more effective gender equality measures.</p>
        
        <img src="img\European-Gender-Equality-Index-1024x517.png" alt="image"  height="100%" width="100%" >
    
</div>
</section>
<!--- Image Slider --->
<section class="myLinearColour" 
style="padding-top: 80px; padding-left:20px; padding-right:40px; font-size:x-large; font-weight:bolder; color: black;">
    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" style="padding-top: 80px;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" >
                <img class="d-block" src="img/carousel/1.png" alt="First slide" style="min-width: 300px; min-height: 300px;">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="img/carousel/2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="img/carousel/3.png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="img/carousel/4.png" alt="Fourth slide">
            </div>
            <div class="carousel-item ">
                <img class="d-block " src="img/carousel/5.png" alt="Fifth slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="img/carousel/6.png" alt="Sixth slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="img/carousel/7.png" alt="Seventh slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="img/carousel/8.png" alt="Eight slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Jumbotron -Εστιάζει σε πληροφορίες-->
    <div  style="padding: 25px;">
        <div class="container-fluid ">
            <div class="row jumbotron">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                    <h1 class="display-4">Help end this! Educate yourself & others</h1>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                    <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Learn more</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    include "templates/footer.php";
?>