<?php
require 'header_home.php';
?>

<form class="loginForm" method='POST' action='index.php?cat=auth&op=register'>

  <table>
    <tr>
      <td>
        <h1>Registreer</h1>
      </td>
      <td>
        <img class="loginFormImg" width="64px" height="64px" src="./view/img/icon.svg" alt="icon">
      </td>
    </tr>
    <tr>
      <td>
        <label for='user_fname'> Voornaam </label>
      </td>
      <td>
        <input type='text' id='user_fname' name='user_fname' roleholder='Voornaam' required><br>
      </td>
    </tr>
    <tr>
      <td>
        <label for='user_lname'> Achternaam </label>
      </td>
      <td>
        <input type='text' id='user_lname' name='user_lname' roleholder='Achternaam' required><br>
      </td>
    </tr>
    <tr>
      <td>
        <label for='email'> Email </label>
      </td>
      <td>
        <input type='text' id='email' name='email' roleholder='email' required><br>
      </td>
    </tr>
    <tr>
      <td>
        <label for='password'> Wachtwoord </label>
      </td>
      <td>
        <input type='password' id='password' name='password' roleholder='Wachtwoord' required><br>
      </td>
    </tr>
    <tr>
      <td>
        <label for='user_province'> Provincie </label>
      </td>
      <td>
        <select name="user_province" id="user_province">
          <option value="Utrecht">Utrecht</option>
          <option value="Noord-Holland">Noord-Holland</option>
          <option value="Zuid-Holland">Zuid-Holland</option>
          <option value="Friesland">Friesland</option>
          <option value="Groningen">Groningen</option>
          <option value="Drenthe">Drenthe</option>
          <option value="Flevoland">Flevoland</option>
          <option value="Overijssel">Overijssel</option>
          <option value="Gelderland">Gelderland</option>
          <option value="Limburg">Limburg</option>
          <option value="Noord-Brabant">Noord-Brabant</option>
          <option value="Zeeland">Zeeland</option>
        </select><br>
      </td>
    </tr>
    <tr>
      <td>
        <label for='City'> Stad </label>
      </td>
      <td>
        <input type='text' id='city' name='city' roleholder='Stad' required><br>
      </td>
    </tr>
    <tr>
      <td>
        <label for='streetname'> Straatnaam </label>
      </td>
      <td>
        <input type='text' id='streetname' name='streetname' roleholder='Straatnaam' required><br>
      </td>
    </tr>
    <tr>
      <td>
        <label for='postal_code'> Postcode </label>
      </td>
      <td>
        <input type='text' id='postal_code' name='postal_code' roleholder='Postcode'><br>
      </td>
    </tr>
    <tr>
      <td>
        <label for='housenumber'> Huisnummer </label>
      </td>
      <td>
        <input type='text' id='housenumber' name='housenumber' roleholder='Huisnummer' required><br>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <input type="submit" name="submit">
      </td>
    </tr>


  </table>

</form>

<?php
require 'footer_home.php';
?>