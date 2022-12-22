<footer class="footer-distributed fade">

<div class="footer-right">

  <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
  <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
  <a href="https://www.linkedin.com/in/nathanael-dousa-488a69209/" target="_blank"><i class="fab fa-linkedin"></i></a>
  <a href="https://www.instagram.com/yung_n.d/" target="_blank"><i class="fab fa-instagram"></i></a>

</div>

<div class="footer-left">

  <p class="footer-links">
    <a class="link-1" onclick="test()" href="#">Home</a>

    <a href="#">Blog</a>

    <a href="#">Pricing</a>

    <a href="#">About</a>

    <a href="#">Faq</a>

    <a href="#contact">Contact</a>
  </p>

  <p>Gameplayparty &copy; 2021</p>
</div>

</footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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

  $('.slider').each(function() {
  var $this = $(this);
  var $group = $this.find('.slide_group');
  var $slides = $this.find('.slide');
  var bulletArray = [];
  var currentIndex = 0;
  var timeout;
  
  function move(newIndex) {
    var animateLeft, slideLeft;
    
    advance();
    
    if ($group.is(':animated') || currentIndex === newIndex) {
      return;
    }
    
    bulletArray[currentIndex].removeClass('active');
    bulletArray[newIndex].addClass('active');
    
    if (newIndex > currentIndex) {
      slideLeft = '100%';
      animateLeft = '-100%';
    } else {
      slideLeft = '-100%';
      animateLeft = '100%';
    }
    
    $slides.eq(newIndex).css({
      display: 'block',
      left: slideLeft
    });
    $group.animate({
      left: animateLeft
    }, function() {
      $slides.eq(currentIndex).css({
        display: 'none'
      });
      $slides.eq(newIndex).css({
        left: 0
      });
      $group.css({
        left: 0
      });
      currentIndex = newIndex;
    });
  }
  
  function advance() {
    clearTimeout(timeout);
    timeout = setTimeout(function() {
      if (currentIndex < ($slides.length - 1)) {
        move(currentIndex + 1);
      } else {
        move(0);
      }
    }, 4000);
  }
  
  $('.next_btn').on('click', function() {
    if (currentIndex < ($slides.length - 1)) {
      move(currentIndex + 1);
    } else {
      move(0);
    }
  });
  
  $('.previous_btn').on('click', function() {
    if (currentIndex !== 0) {
      move(currentIndex - 1);
    } else {
      move(3);
    }
  });
  
  $.each($slides, function(index) {
    var $button = $('<a class="slide_btn">&bull;</a>');
    
    if (index === currentIndex) {
      $button.addClass('active');
    }
    $button.on('click', function() {
      move(index);
    }).appendTo('.slide_buttons');
    bulletArray.push($button);
  });
  
  advance();
});

// Toggle Function
var bool = true; //set bool true for text manipulation
$('.toggle').click(function(){
  //switch text
  if(bool == true){
    bool = false;
    $(".tooltip").hide().html("login").fadeIn();
  } else{
    bool = true;
    $(".tooltip").hide().html("Registreren").fadeIn();
  }

  // Switches the forms  
  $('.form').animate({
    height: "toggle",
    'padding-top': 'toggle',
    'padding-bottom': 'toggle',
    opacity: "toggle"
  }, "slow");
});
</script>

</html>