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
    <div class="tooltip">Bioscoop toevoegen</div>
  </div>
  <div class="form">
    <h2>Login</h2>
    <form  method="POST" action="?cat=auth&op=login">
      <input required type="text" name="cinema_email" placeholder="example@email.com"/>
      <input required type="password" name="cinema_password" placeholder="Wachtwoord"/>
      <input type="submit" name="submit" value="login">
    </form>
  </div>
  <div class="form">
    <h2>Voeg een bioscoop toe</h2>
    <form method='POST' action='index.php?cat=auth&op=createCinema'>

                <label for='cinema_name'> Bioscoop Naam: </label>
                <input type='text' id='cinema_name' name='cinema_name' roleholder='Bioscoop naam' required>

                <label for='cinema_email'> E-mail: </label>
                <input type='text' id='cinema_email' name='cinema_email' roleholder='email' required>

                <label for='cinema_password'> Wachtwoord: </label>
                <input type='password' id='cinema_password' name='cinema_password' roleholder='Wachtwoord' required>
                
                <label for='cinema_city'> Stad: </label>
                <input type='text' id='cinema_city' name='cinema_city' roleholder='Stad' required>

                <label for='cinema_street'> Straatnaam: </label>
                <input type='text' id='streetname' name='cinema_street' roleholder='Straatnaam' required>

                <label for='cinema_housenumber'> Huisnummer: </label>
                <input type='text' id='cinema_housenumber' name='cinema_housenumber' roleholder='Housenumber' required>

                <label for='cinema_housenumber_addition'> Huisnummer toevoegingen: </label>
                <input type='text' id='cinema_housenumber_addition' name='cinema_housenumber_addition' roleholder='Huisnummer toevoeging'>

                <label for='cinema_postalcode'> Postcode: </label>
                <input type='text' id='cinema_postalcode' name='cinema_postalcode' roleholder='Postcode' required>

                <input type="submit" name="submit">

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
    $(".tooltip").hide().html("Bioscoop toevoegen").fadeIn();
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
