<?php

include('./view/admin/admin_header.php');
?>

<body>
    <div class="m-4">

        <?php

        ?>
            <form style="display: flex; justify-content:center; flex-direction:column" method="post" action="?cat=admin&op=createLounge" enctype="multipart/form-data">
                <label for="h2">Naam zaal</label>
                <input type="text" name="lounge_name">
                <label for="h2">Hoeveelheid stoelen</label>
                <input type="text" name="amount_chairs">
                <label for="h2">hoeveelheid rolstoel plekken</label>
                <input type="text" name="wheelchair_places">
                <label for="h2">scherm grootte</label>
                <input type="text" name="screensize">
                <input type="submit" name="submit">
            </form>
    </div>
        <?php
        include('./view/admin/admin_footer.php');
