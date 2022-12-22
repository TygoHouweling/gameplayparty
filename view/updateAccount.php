<?php
require 'view/header_home.php';
?>
<?php

foreach ($result as $value) {

?>

<form class="updateAccount" method='post'
    action='index.php?cat=auth&op=updateAccount&user_id=<?= $_SESSION["user_id"] ?>'>
    <table>
        <tr>
            <td>
                <h1>Account gegevens wijzigen</h1>
            </td>
            <td>
                <img class="updateAccountImg" width="64px" height="64px" src="./view/img/icon.svg" alt="icon">
            </td>
        </tr>
        <tr>
            <td>
                <label for='user_fname'> Voornaam </label>
            </td>
            <td>
                <input type='text' id='user_fname' name='user_fname' value=<?= $value['user_fname'] ?> required><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for='user_lname'> Achternaam </label>
            </td>
            <td>
                <input type='text' id='user_lname' name='user_lname' value=<?= $value['user_lname'] ?> required><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for='email'> Email </label>
            </td>
            <td>
                <input type='text' id='email' name='email' value=<?= $value['email'] ?> required><br>
            </td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td>
                <label for='user_province'> Provincie </label>
            </td>
            <td>
                <select name="user_province" id="user_province" value=<?= $value['user_province'] ?>>
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
                <input type='text' id='city' name='city' value=<?= $value['city'] ?> required><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for='streetname'> Straatnaam </label>
            </td>
            <td>
                <input type='text' id='streetname' name='streetname' value=<?= $value['streetname'] ?> required><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for='postal_code'> Postcode </label>
            </td>
            <td>
                <input type='text' id='postal_code' name='postal_code' value=<?= $value['postal_code'] ?>><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for='housenumber'> Huisnummer </label>
            </td>
            <td>
                <input type='text' id='housenumber' name='housenumber' value=<?= $value['housenumber'] ?> required><br>
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
}

require 'view/footer_home.php';
?>