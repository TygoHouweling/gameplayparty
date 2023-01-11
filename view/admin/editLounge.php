<?php

include('./view/admin/admin_header.php');
?>

<body>
    <div class="m-4">

        <?php
        foreach ($result as $row) {

        ?>
            <form style="display: flex; justify-content:center; flex-direction:column" method="post" action="?cat=admin&op=editLounge&item=<?= $row['lounge_id'] ?>" enctype="multipart/form-data">
                <label for="h2">Naam zaal</label>
                <input type="text" value="<?= $row['lounge_name'] ?>" name="lounge_name">
                <label for="h2">Hoeveelheid stoelen</label>
                <input type="text" value="<?= $row['amount_chairs'] ?>" name="amount_chairs">
                <label for="h2">hoeveelheid rolstoel plekken</label>
                <input type="text" value="<?= $row['wheelchair_places'] ?>" name="wheelchair_places">
                <label for="h2">scherm grootte</label>
                <input type="text" value="<?= $row['screensize'] ?>" name="screensize">
                <input type="submit" name="submit">
            </form>
        <?php
        }
        ?>
    </div>
        <?php
        include('./view/admin/admin_footer.php');
