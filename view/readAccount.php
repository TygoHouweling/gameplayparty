<?php
require_once 'view/header_home.php';
?>
<?php

foreach ($result as $value) {

?>

<div class='card'>
<p>Voornaam: <?=$value['user_fname']?></p>
<p>Achternaam <?=$value['user_lname']?></p>
<p>E-mail: <?=$value['email']?></p>
<p>Provincie: <?=$value['user_province']?></p>
<p>Stad <?=$value['city']?></p>
<p>Straatnaam: <?=$value['streetname']?></p>
<p>Postcode: <?=$value['postal_code']?></p>
<p>Huisnummer <?=$value['housenumber']?></p>
<p>Huisnummer toevoeging: <?=$value['housenumber_addition']?></p><br>
<li <?= isset($_GET['op']) && $_GET['op'] == 'update' ? 'class=active' : '' ?>><a href="?cat=auth&op=updateAccount&user_id=">Account gegevens wijzigen</a></li>
<li <?= isset($_GET['op']) && $_GET['op'] == 'delete' ? 'class=active' : '' ?>><a href="?cat=auth&op=deleteAccount&user_id=">Account verwijderen</a></li>
</div>

<?php
}

require_once 'view/footer_home.php';
    ?>