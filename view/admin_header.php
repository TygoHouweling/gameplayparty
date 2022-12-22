<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPP</title>
    <link rel="stylesheet" href="./view/style/home.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="./view/js/main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="./view/img/gpp.svg">
</head>

<body>
    <nav class="navbar">
        <div class="nav-links">
            <ul class="nav-menu">
                <?php
                if (isset($_SESSION['loggedIn'])) {
                ?>
                <?php 
                if (($_SESSION['user_role'] == 1) XOR ($_SESSION['user_role'] == 2)) {
                ?>
                    <li <?= isset($_GET['op']) && $_GET['op'] == 'createCinema' ? 'class=active' : '' ?>><a href="index.php?cat=home&op=createCinema">Bioscoop Toevoegen</a></li>
                <?php
                    }
                ?>
                <?php
                }
                ?>
            </ul>
        </div>
        <iconify-icon icon="bx:grid-alt" class="menu-hamburger"></iconify-icon>
    </nav>