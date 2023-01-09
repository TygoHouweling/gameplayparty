<?php
require 'header_home.php';
?>


<div class="form">
  <h2>Create an account</h2>
  <form method='POST' action='index.php?cat=auth&op=register'>
    <input type='text' id='user_fname' name='user_fname' roleholder='Voornaam' placeholder="Voornaam" required />
    <input type='text' id='user_lname' name='user_lname' roleholder='Achternaam' placeholder="Achternaam" required />
    <input type='text' id='email' name='email' roleholder='email' placeholder="Email" required />
    <input type='password' id='password' name='password' roleholder='Wachtwoord' placeholder="Wachtwoord" required />
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
    </select>
    <input type='text' id='city' name='city' roleholder='Stad' placeholder="Stad" required>
    <input type='text' id='streetname' name='streetname' roleholder='Straatnaam' placeholder="Straatnaam" required>
    <input type='text' id='postal_code' name='postal_code' roleholder='Postcode' placeholder="Postcode">
    <input type='text' id='housenumber' name='housenumber' roleholder='Huisnummer' placeholder="Huisnummer" required>
    <input type="submit" name="submit" value="Registreer">
  </form>

  <?php
  require 'footer_home.php';
  ?>