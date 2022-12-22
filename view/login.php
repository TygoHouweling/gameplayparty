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
</form>

<?php
include('./view/footer_home.php');
