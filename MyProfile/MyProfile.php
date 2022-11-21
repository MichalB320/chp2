<?php
session_start();

include("../connection.php");
include("../functions.php");

$user_data = check_login($con, false);

if (isset($_GET['delete'])) {
    $userName = $user_data['user_name'];

        $query = "DELETE FROM users WHERE user_name = '$userName'";

        mysqli_query($con, $query);

        header("Location: ../login.php");
        die;
}

if (isset($_GET['edit'])) {
    include "../ZmenM.php";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styl.css">
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
                    <a class="nav-link" href="../home/home.html">DOMOV</a>
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
                    <a class="nav-link" href="myProfile.html">PROFIL</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="row odsadenie">
    <div class="col-sm-4 d-flex flex-column min-vh-50 justify-content-center align-items-center">
        <img class="img-fluid rounded-circle mx-auto d-block" src="../about/me.jpg" alt="Misko">
        <h2 class="text-center"><?php echo $user_data['user_name']; ?></h2>
        <!--        <a href="../login/login.html">-->
        <!--            <div class="text-center align-bottom">-->
        <!--                <button type="button" class="btn btn-danger">Odhlásiť sa</button>-->
        <!--            </div>-->
        <!--        </a>-->
        <a href="../logout.php" class="btn btn-danger">Odhlásiť sa</a>
        <a href="?edit=<?php echo $user_data['id'] ?>" class="btn btn-danger">Zmeniť meno</a>
        <a href="?delete=<?php echo $user_data['id']; ?>" class="btn btn-danger">Zrušiť účet</a>
    </div>

    <div class="col-sm-8">
        <div class="rowOkraje">
            <div class="row">
                <h1>O mne</h1>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="odsadenieLeft1">meno: </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="color-text odsadenieLeft2">Michal</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="odsadenieLeft1">priezvisko: </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="color-text odsadenieLeft2">Bežo</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="odsadenieLeft1">adresa: </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="color-text odsadenieLeft2">275/56 Mýtna Trnava, 596 55</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="odsadenieLeft1">datum narodenia: </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="color-text odsadenieLeft2">15.8.1997</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="odsadenieLeft1">vek: </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="color-text odsadenieLeft2">23</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="odsadenieLeft1">e-mail: </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="color-text odsadenieLeft2">midn.sfs@dsfd.sk</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="odsadenieLeft1">tel. číslo: </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="color-text odsadenieLeft2">092458869</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="rowOkraje">
            <div class="row">
                <h1>Pred nedávnom nájdene</h1>
                <p class="odsadenieLeft1 color-text">Dubák</p>
                <p class="odsadenieLeft1 color-text">Muchotrávka</p>
                <p class="odsadenieLeft1 color-text">Kozák</p>
            </div>
        </div>
    </div>
</div>

<footer class="bg-dark text-center text-light mt-auto">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright: --MISKO--
    </div>
</footer>
</body>
</html>
