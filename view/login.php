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

<form method="POST" action="?cat=auth&op=login">
    <input required type="text" name="email" placeholder="example@email.com">
    <input required type="password" name="password">
    <label for="disclaimer">
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
    <input type="submit" name="submit">
</form>

<?php
include('./view/footer_home.php');
