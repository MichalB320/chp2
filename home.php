<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HOME</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Home/styl.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 575px)" href="home.html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="d-flex flex-column min-vh-100">
<nav class="navbar navbar-expand-sm bg-success navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Mushroom atlas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">DOMOV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../about/about.html">O NÁS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../zbierka/zbierka.html">ATLAS HÚB</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contact/contact.html">KONTAKT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="MyProfile/MyProfile.php">PROFIL</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div>
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Home/bedle.jpg" alt="Bedle" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="Home/muchotravky2.jpg" alt="Muchotravky" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="Home/dubaky2.jpg" alt="Dubaky" class="d-block w-100">
            </div>
        </div>


        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>
<div class="pozadie">
    <!--    <div>-->
    <!--        <img src="bg.jpg" alt="pozadie">-->
    <!--    </div>-->

    <div class="obsah">
        <div class="row">
            <!-- <div class="col-sm"> </div> -->
            <div class="col-sm-6 text">
                <p class="pMargin nadnadpis">Vitáme Vás na stránke: </p>
                <h1 class="text-center">Atlas <span>húb</span></h1>
                <p class="text-center text">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit... There
                    is no one who loves pain itself, who seeks after it and wants to have it, simply because it is
                    pain.....................................................................
                    ..................
                    ......................
                    ........................................................
                    Sme webový developeri v time, ktorý sa skladá z Tanicky, Beňa, Tadeaša, Michala a
                    Radovana ..............LOREM IPSUM.................................
                    .........................................
                    .................. Viac sa o nás dočítaš <a href="../about/about.html">TU!!!</a>
                </p>
            </div>
            <div class="col-sm-6">

            </div>
        </div>


        <!--        <div class="row">-->
        <!--            &lt;!&ndash; <div class="col-sm"> </div>&ndash;&gt;-->
        <!--            <div class="col-sm-6">-->
        <!--                <img class="img-fluid" src="c1.jpg" alt="compayn1">-->
        <!--            </div>-->
        <!--            <div class="col-sm-6">-->
        <!--                <img class="img-fluid" src="c2.jpg" alt="company2">-->
        <!--            </div>-->
        <!--            &lt;!&ndash;<div class="col-sm"> </div>&ndash;&gt;-->
        <!--        </div>-->
    </div>
</div>

<footer class="bg-dark text-center text-light mt-auto">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright: --MISKO--
    </div>
</footer>
</body>
</html>

