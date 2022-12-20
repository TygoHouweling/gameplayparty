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
            <li class="active"><a href="">Home</a></li>
            <li class="test"><a href="">About Us</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Careers</a></li>
            <li><a href="">Contact</a></li>
          </ul>
        </div>
        <iconify-icon icon="bx:grid-alt" class="menu-hamburger"></iconify-icon>
      </nav>
      <article class="stack__card">
        <figure class="span__50"> <img src="./view/img/001.jpg" ></img>
         
        </figure>
        <div class="stack__card__content">
          <h2 class="stack__card__title">Bioscoop</h2>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet dolore aliquam doloribus ullam, pariatur odit! Perferendis, eius nostrum. Excepturi deserunt dolorem pariatur adipisci architecto consequatur modi aliquam nulla, ab ea.
           </p>
          <span class="popuptext" id="myPopup"></span>
        </div>
    
         
        </div>
      </article>

</body>

<script>
    const menuHamburger = document.querySelector(".menu-hamburger");
    const navLinks = document.querySelector(".nav-links");
    var boolcl = true;
    menuHamburger.addEventListener('click',()=>{
            navLinks.classList.toggle('mobile-menu');
            if(boolcl == true){
                document.querySelector(".menu-hamburger").style = "color: #C4E538";
                boolcl = false;

            } else {
                document.querySelector(".menu-hamburger").style = "color: black";
                boolcl = true;
            }

            })
</script>
</html>