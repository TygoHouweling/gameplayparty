<?php

include('./view/admin/admin_header.php');
?>

<body>

    <form style="display: flex; justify-content:center; flex-direction:column" method="post" action="?cat=admin&op=createItem&page=<?= $_GET['page'] ?>" enctype="multipart/form-data">
        <label for="h2">header</label>
        <input type="text" name="header">
        <label for="image">image</label>
        <input type="file" name="img" accept="image/*" id="img">
        <label for="mainContent"> content</label>
        <textarea id="mceDEMO" name="text"></textarea>
        <script>
            tinymce.init({
                selector: 'textarea',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            });
        </script>
        <input type="submit" name="submit">
    </form>

</body>