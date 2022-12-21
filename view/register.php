<?php
require 'header_home.php';
?>

<form method='POST' action='index.php?cat=auth&op=register'>

<label for='user_fname'> Voornaam </label>
<input type='text' id='user_fname' name='user_fname' roleholder='Voornaam' required><br>

<label for='user_lname'> Achternaam </label>
<input type='text' id='user_lname' name='user_lname' roleholder='Achternaam' required><br>

<label for='email'> Email </label>
<input type='text' id='email' name='email' roleholder='email' required><br>

<label for='password'> Wachtwoord </label>
<input type='password' id='password' name='password' roleholder='Wachtwoord' required><br>

<label for='user_province'> Provincie </label>
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

<label for='City'> Stad </label>
<input type='text' id='city' name='city' roleholder='Stad' required><br>

<label for='streetname'> Straatnaam </label>
<input type='text' id='streetname' name='streetname' roleholder='Straatnaam' required><br>

<label for='postal_code'> Postcode </label>
<input type='text' id='postal_code' name='postal_code' roleholder='Postcode'><br>

<label for='housenumber'> Huisnummer </label>
<input type='text' id='housenumber' name='housenumber' roleholder='Huisnummer' required><br>

<input type="submit" name="submit">
</form>

<?php
require 'footer_home.php';
?>