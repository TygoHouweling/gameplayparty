<?php

include('./view/admin/admin_header.php');
?>

<body>
    <div class="m-4">
        <form style="display: flex; justify-content:center; flex-direction:column" method="post" action="?cat=admin&op=readDisclaimerItems&page=<?= $_GET['page'] ?>" enctype="multipart/form-data">
            <label for="h1">header van pagina</label>
            <input type="text" value="<?= $result[0]['h1'] ?>" name="h1">
            <input style="cursor: pointer;" type="submit" name="submit" value="Update header">
        </form>
        <table class="table p-5">
            <thead class="thead-light">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">header</th>
                    <th scope="col">text</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
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
                        <td><a href="?cat=admin&op=editItem&page=2&item=<?= $row['area_id'] ?>"><i class="material-icons"> edit </i></a></td>
                        <td><a href="?cat=admin&op=deleteItem&page=2&item=<?= $row['area_id'] ?>"><i class="material-icons"> delete </i></a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <a href="?cat=admin&op=createItem&page=2"><i class="material-icons"> add</i></a>

    </div>


    <?php
    include('./view/admin/admin_footer.php');
