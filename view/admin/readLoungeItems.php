<?php

include('./view/admin/admin_header.php');
?>

<body>
    <div class="m-4">

        <form style="display: flex; justify-content:center; flex-direction:column" method="post" action="?cat=admin&op=readHomepageItems" enctype="multipart/form-data">
        </form>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Naam zaal</th>
                    <th scope="col">edit</th>
                    <th scope="col">delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $row) {
                ?>
                    <tr>
                        <th scope="row"><?= $row['lounge_id'] ?></th>
                        <td><?= $row['lounge_name'] ?></td>
                        <td><a href="?cat=admin&op=editLounge&item=<?= $row['lounge_id'] ?>"><i class="material-icons"> edit </i></a></td>
                        <td><a href="?cat=admin&op=disableLounge&item=<?= $row['lounge_id'] ?>"><i class="material-icons"> delete </i></a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <a href="?cat=admin&op=createLounge"><i class="material-icons"> add</i></a>
    </div>
    <?php
    include('./view/admin/admin_footer.php');
