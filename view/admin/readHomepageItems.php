<?php

include('./view/admin/admin_header.php');
?>

<body>
    <form style="display: flex; justify-content:center; flex-direction:column" method="post" action="?cat=admin&op=editHomepageHeader" enctype="multipart/form-data">
        <label for="h2">header</label>
        <input type="text" value="<?= $row['header'] ?>" name="header">
        <input type="submit" name="submit">
    </form>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">id</th>
                <th scope="col">header</th>
                <th scope="col">text</th>
                <th scope="col">edit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($result as $row) {
            ?>
                <tr>
                    <th scope="row"><?= $row['area_id'] ?></th>
                    <td><?= $row['header'] ?></td>
                    <td><?= $row['text'] ?></td>
                    <td><a href="?cat=admin&op=editHomepageItem&item=<?= $row['area_id'] ?>">edit</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <a href="?cat=admin&op=createHomepageItem"><i class="material-icons"> add</i></a>

</body>