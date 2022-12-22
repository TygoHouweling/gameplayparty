<?php

include('./view/admin/admin_header.php');

?>

<body>
    <form style="display: flex; justify-content:center; flex-direction:column" method="post" action="?cat=admin&op=editHomepage" enctype="multipart/form-data">
        <label for="h1">h1</label>
        <input type="text" value="<?= $h1 ?>" name="h1">
        <label for="h2">h2(1)</label>
        <input type="text" value="<?= $h2_1 ?>" name="h2_1">
        <label for="image">image(1)</label>
        <input type="file" value="<?= $img_1 ?>" name="file_1" accept="image/*" id="file_1">
        <label for="mainContent"> content(1)</label>
        <!-- <textarea id="mceDEMO" name="con_1"><?= $con_1 ?></textarea>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.0.0/tinymce.min.js" integrity="sha512-XQOOk3AOZDpVgRcau6q9Nx/1eL0ATVVQ+3FQMn3uhMqfIwphM9rY6twWuCo7M69rZPdowOwuYXXT+uOU91ktLw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            tinymce.init({
                selector: "#mceDEMO",
                plugins: "save",
                menubar: false,
                toolbar: "save | styleselect | bold italic | alignleft aligncenter alignright alignjustify"
            });
        </script> -->
        <label for="h2">h2(2)</label>
        <input type="text" value="<?= $h2_2 ?>" name="h2_2">
        <label for="image">image(2)</label>
        <input type="file" value="<?= $img_2 ?>" name="file_2" accept="image/*" id="file_2">
        <label for="mainContent"> content(2)</label>
        <textarea id="mceDEMO" name="con_2"><?= $con_1 ?></textarea>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.0.0/tinymce.min.js" integrity="sha512-XQOOk3AOZDpVgRcau6q9Nx/1eL0ATVVQ+3FQMn3uhMqfIwphM9rY6twWuCo7M69rZPdowOwuYXXT+uOU91ktLw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            tinymce.init({
                selector: "#mceDEMO",
                plugins: "save",
                menubar: false,
                toolbar: "save | styleselect | bold italic | alignleft aligncenter alignright alignjustify"
            });
        </script>
        <input type="submit" name="submit">
    </form>
</body>