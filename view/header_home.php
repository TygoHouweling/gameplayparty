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
                if (isset($_SESSION['loggedIn'])) {
                ?>
                    <li <?= isset($_GET['op']) && $_GET['op'] == 'account' ? 'class=active' : '' ?>><a href="?cat=auth&op=account">Uw Account</a></li>
                    <li id="mybtn" <?= isset($_GET['op']) && $_GET['op'] == 'logout' ? 'class=active' : '' ?>><a href="?cat=auth&op=logout">logout</a></li>
                <?php
                } else {
                ?>
                    <li <?= isset($_GET['op']) && $_GET['op'] == 'register' ? 'class=active' : '' ?>><a href="?cat=auth&op=register">Registreren</a></li>
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
    <script>// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}</script>