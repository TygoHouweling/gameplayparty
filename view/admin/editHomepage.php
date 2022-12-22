<?php

include('./view/admin/admin_header.php');

?>

<body>
    <form style="display: flex; justify-content:center; flex-direction:column" method="post" action="?cat=admin&op=editHomepage">
        <label for="h1">h1</label>
        <input type="text" name="homepage_h1">
        <label for="h2">h2(1)</label>
        <input type="text" name="homepage_h2_1">
        <label for="image">image(1)</label>
        <input type="file" name="file_1">
        <label for="mainContent"> content(1)</label>
        <textarea id="mceDEMO" name="content_1"></textarea>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.0.0/tinymce.min.js" integrity="sha512-XQOOk3AOZDpVgRcau6q9Nx/1eL0ATVVQ+3FQMn3uhMqfIwphM9rY6twWuCo7M69rZPdowOwuYXXT+uOU91ktLw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            tinymce.init({
                selector: "#mceDEMO",
                plugins: "save",
                menubar: false,
                toolbar: "save | styleselect | bold italic | alignleft aligncenter alignright alignjustify"
            });
        </script>
        <label for="h2">h2(2)</label>
        <input type="text" name="homepage_h2_2">
        <label for="image">image(2)</label>
        <input type="file" name="file_2">
        <label for="mainContent"> content(2)</label>
        <textarea id="mceDEMO" name="content_2"></textarea>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.0.0/tinymce.min.js" integrity="sha512-XQOOk3AOZDpVgRcau6q9Nx/1eL0ATVVQ+3FQMn3uhMqfIwphM9rY6twWuCo7M69rZPdowOwuYXXT+uOU91ktLw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            tinymce.init({
                selector: "#mceDEMO",
                plugins: "save",
                menubar: false,
                toolbar: "save | styleselect | bold italic | alignleft aligncenter alignright alignjustify"
            });
        </script>
        <input type="submit">
    </form>
</body>