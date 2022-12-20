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
</head>

<body>
  <nav class="navbar">
    <a href="#" class="logo"><img src="./view/img/gpp.svg"></img></a>
    <div class="nav-links">
      <ul class="nav-menu">
        <li><a href="?cat=home">Home</a></li>
        <li class="active"><a href="?cat=home&op=cinemasOverview">cinemas</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </div>
    <iconify-icon icon="bx:grid-alt" class="menu-hamburger"></iconify-icon>
  </nav>
  <?php
  foreach ($result as $item) {
  ?>
    <article class="stack__card">
      <figure class="span__50"> <img src="./view/img/001.jpg"></img>

      </figure>
      <div class="stack__card__content">
        <h2 class="stack__card__title"><?= $item['cinema_name'] ?></h2>
        <p><?= $item['cinema_description'] ?>
        </p>
        <span class="popuptext" id="myPopup"></span>
        <a href="?cat=home&op=cinema&item=<?= $item['cinema_id'] ?>">Details</a>
      </div>


      </div>
    </article>
  <?php
  }
  ?>

</body>

<script>
  const menuHamburger = document.querySelector(".menu-hamburger");
  const navLinks = document.querySelector(".nav-links");
  var boolcl = true;
  menuHamburger.addEventListener('click', () => {
    navLinks.classList.toggle('mobile-menu');
    if (boolcl == true) {
      document.querySelector(".menu-hamburger").style = "color: #C4E538";
      boolcl = false;

    } else {
      document.querySelector(".menu-hamburger").style = "color: black";
      boolcl = true;
    }

  })
</script>

</html>