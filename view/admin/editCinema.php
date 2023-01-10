<?php

include('./view/admin/admin_header.php');
?>

<body>
    <?php
    foreach ($result as $row) {

    ?>
        <form style="display: flex; justify-content:center; flex-direction:column" method="post" action="?cat=admin&op=editCinemaPage" enctype="multipart/form-data">
            <label for="h2">Bioscoop naam</label>
            <input type="text" value="<?= $row['cinema_name'] ?>" name="cinema_name">
            <label for="h2">Bioscoop email</label>
            <input type="text" value="<?= $row['cinema_email'] ?>" name="cinema_email">
            <label for="h2">Bioscoop wachtwoord</label>
            <input type="text" name="cinema_password">
            <label for="h2">Bioscoop huisnummer</label>
            <input type="text" value="<?= $row['cinema_housenumber'] ?>" name="cinema_housenumber">
            <label for="h2">Bioscoop huisnummer toevoeging</label>
            <input type="text" value="<?= $row['cinema_housenumber_addition'] ?>" name="cinema_housenumber_addition">
            <label for="h2">Bioscoop straat</label>
            <input type="text" value="<?= $row['cinema_street'] ?>" name="cinema_street">
            <label for="h2">Bioscoop postcode</label>
            <input type="text" value="<?= $row['cinema_postalcode'] ?>" name="cinema_postalcode">
            <label for="h2">Bioscoop stad</label>
            <input type="text" value="<?= $row['cinema_city'] ?>" name="cinema_city">

            <label for="mainContent">Bioscoop Toegangelijkheid </label>
            <label for="mainContent">Bioscoop Beschrijving</label>
            <textarea id="mceDEMO" name="cinema_description"><?= $row['cinema_description'] ?></textarea>
            <script>
                tinymce.init({
                    selector: 'textarea',
                    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                });
            </script>
            <textarea id="mceDEMO" name="cinema_accessibility"><?= $row['cinema_accessibility'] ?></textarea>
            <script>
                tinymce.init({
                    selector: 'textarea',
                    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                });
            </script>


            <label for="image">Bioscoop Foto</label>
            <input type="file" name="img" accept="image/*" id="img">

            <input type="submit" name="submit">
        </form>
    <?php
    }
    include('./view/admin/admin_footer.php');

    ?>