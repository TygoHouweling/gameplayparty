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