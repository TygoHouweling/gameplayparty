<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./view/style/home.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="./view/js/main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <nav class="navbar">
        <a href="#" class="logo"><img src="./view/img/gpp.svg"></img></a>
        <div class="nav-links">
            <ul class="nav-menu">
                <li <?= !isset($_GET['op']) ? 'class=active' : '' ?>><a href="?cat=home">Home</a></li>
                <li <?= isset($_GET['op']) && ($_GET['op'] == 'cinemasOverview' || $_GET['op'] == 'cinema') ? 'class=active' : '' ?>><a href="?cat=home&op=cinemasOverview">Bioscopen</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>
        <iconify-icon icon="bx:grid-alt" class="menu-hamburger"></iconify-icon>
    </nav>