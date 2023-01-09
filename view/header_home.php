<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPP</title>
    <link rel="stylesheet" href="./view/style/home.css">
    <script src="https://use.fontawesome.com/dca7965d17.js"></script>
    <script src="./view/js/main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="icon" href="./view/img/gpp.svg">
</head>

<body>
    <nav class="navbar">
        <a href="?cat=home" class="logo"><img src="./view/img/gpp.svg"></img></a>
        <div class="nav-links">
            <ul class="nav-menu">
                <li <?= !isset($_GET['op']) ? 'class=active' : '' ?>><a href="?cat=home&page=1">Home</a></li>
                <li <?= isset($_GET['op']) && ($_GET['op']== 'disclaimers') ? 'class=active' : '' ?>><a href="?cat=home&op=disclaimers&page=2">Disclaimers</a></li>
                <li <?= isset($_GET['op']) && ($_GET['op'] == 'cinemasOverview' || $_GET['op'] == 'cinema') ? 'class=active' : '' ?>><a href="?cat=home&op=cinemasOverview">Bioscopen</a></li>
                <?php
                if (isset($_SESSION['user_role']) && $_SESSION['user_role'] >= 1) {
                ?>
                    <li><a href="?cat=admin">Admin Paneel</a></li>
                <?php
                }
                ?>
                <?php
                if (isset($_SESSION['loggedIn'])) {
                ?>
                    <li <?= isset($_GET['op']) && $_GET['op'] == 'account' ? 'class=active' : '' ?>><a href="?cat=auth&op=account">Uw Account</a></li>
                    <li <?= isset($_GET['op']) && $_GET['op'] == 'logout' ? 'class=active' : '' ?>><a href="?cat=auth&op=logout">logout</a></li>
                <?php
                } else {
                ?>
                    <li <?= isset($_GET['op']) && $_GET['op'] == 'login' ? 'class=active' : '' ?>><a href="?cat=auth&op=login">Login</a></li>

                <?php
                }
                ?>
            </ul>
        </div>
        <!-- <iconify-icon icon="bx:grid-alt" class="menu-hamburger"></iconify-icon> -->
        <span class="material-symbols-outlined menu-hamburger">
menu
</span>
    </nav>