<?php
require 'header_home.php';
?>

<?php
if ($_SESSION['user_role'] == 0) {
    header('location:../index.php?cat=home');
}
?>

<form class='cinema' method='POST' action='index.php?cat=home&op=createCinema'>
    <table>
        <tr>
            <td>
                <img class="cinemaImg" width="64px" height="64px" src="./view/img/icon.svg" alt="icon">
            </td>
        </tr>
        <tr>
            <td>
                <h3>Bioscoop toevoegen</h3>
            </td>
        </tr>
        <tr>
            <td>
                <label for='cinema_name'> Bioscoop Naam: </label><br>
                <input type='text' id='cinema_name' name='cinema_name' roleholder='Bioscoop naam' required><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for='cinema_housenumber'> Huisnummer: </label><br>
                <input type='text' id='cinema_housenumber' name='cinema_housenumber' roleholder='Huisnummer' required><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for='cinema_housenumber_addition'> Huisnummer toevoegingen: </label><br>
                <input type='text' id='cinema_housenumber_addition' name='cinema_housenumber_addition' roleholder='Huisnummer toevoeging'><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for='cinema_street'> Straatnaam: </label><br>
                <input type='text' id='streetname' name='cinema_street' roleholder='Straatnaam' required><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for='cinema_postalcode'> Postcode: </label><br>
                <input type='text' id='cinema_postalcode' name='cinema_postalcode' roleholder='Postcode' required><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for='cinema_city'> Stad: </label><br>
                <input type='text' id='cinema_city' name='cinema_city' roleholder='Stad' required><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for='cinema_accessibility'> Beschikbaarheid: </label><br>
                <input type='text' id='cinema_accessibility' name='cinema_accessibility' roleholder='Beschikbaarheid' required><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for='cinema_image'> Afbeelding: </label><br>
                <input type='text' id='cinema_image' name='cinema_image' roleholder='Afbeelding' required><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for='cinema_description'> Beschrijving: </label><br>
                <textarea id="mceDEMO" name="cinema_description"></textarea>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.0.0/tinymce.min.js" integrity="sha512-XQOOk3AOZDpVgRcau6q9Nx/1eL0ATVVQ+3FQMn3uhMqfIwphM9rY6twWuCo7M69rZPdowOwuYXXT+uOU91ktLw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <script>
                    tinymce.init({
                        selector: "#mceDEMO",
                        plugins: "save",
                        menubar: false,
                        toolbar: "save | styleselect | bold italic | alignleft aligncenter alignright alignjustify"
                    });
                </script>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit">
            </td>
        </tr>
    </table>
</form>

<?php
require 'footer_home.php';
?>