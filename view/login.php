<?php
include('./view/header_home.php');

?>
<span class="popuptext" id="myPopup">
    <?php
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
</span>


<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle">
    <i class="fa-solid fa-right-to-bracket"></i>
    <div class="tooltip">Registreren</div>
  </div>
  <div class="form">
    <h2>Login to your account</h2>
    <form  method="POST" action="?cat=auth&op=login">
      <input required type="text" name="email" placeholder="example@email.com"/>
      <input required type="password" name="password" placeholder="Wachtwoord"/>
      <button>Login</button>
    </form>
  </div>
  <div class="form">
    <h2>Create an account</h2>
    <form method='POST' action='index.php?cat=auth&op=register'>
      <input type='text' id='user_fname' name='user_fname' roleholder='Voornaam' placeholder="Voornaam" required/>
      <input type='text' id='user_lname' name='user_lname' roleholder='Achternaam' placeholder="Achternaam" required/>
      <input type='text' id='email' name='email' roleholder='email' placeholder="Email" required/>
      <input type='password' id='password' name='password' roleholder='Wachtwoord' placeholder="Wachtwoord" required/>
      <button>Register</button>
    </form>
  </div>
  <div class="cta"><a href="">Forgot your password?</a></div>
</div>

<!-- 
<form class="loginForm" method="POST" action="?cat=auth&op=login">
    <table>
        <tr>
            <td>
                <img class="loginFormImg" width="64px" height="64px" src="./view/img/icon.svg" alt="icon">
            </td>
        </tr>
        <tr>
            <td>
                <h1>Login</h1>
            </td>
        </tr>
        <tr>
            <td>
                <input required type="text" name="email" placeholder="example@email.com">
            </td>
        </tr>
        <tr>
            <td>
                <label class="loginLabel" for="email">example@gmail.com</label>
            </td>
        </tr>
        <tr>
            <td>
                <input required type="password" name="password">
            </td>
        </tr>
        <tr>
            <td>
                <label for="" class="loginLabel">
                    <ul>
                        <li>
                            Wachtwoord moet voldoen aan:
                            <ul>

                                <li>8-12 karakters</li>
                                <li>Minimaal 1 nummer & 1 cijfer</li>
                            </ul>
                        </li>
                        <li>
                            Mag voldoen aan:
                            <ul>
                                <li>!@#$%</li>
                            </ul>
                        </li>
                    </ul>
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit">
            </td>
        </tr>
    </table>

    </label>
</form> -->
<script>
    // Toggle Function
var bool = true; //set bool true for text manipulation
$('.toggle').click(function(){
  //switch text
  if(bool == true){
    bool = false;
    $(".tooltip").hide().html("login").fadeIn();
    // Switches the Icon
    $(this).children('i').removeClass().toggleClass('fa-solid fa-xmark');
  } else{
    bool = true;
    $(".tooltip").hide().html("Registreren").fadeIn();
    // Switches the Icon
    $(this).children('i').removeClass().toggleClass('fa-solid fa-right-to-bracket');
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
<?php
include('./view/footer_home.php');
