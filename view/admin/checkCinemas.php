<?php

include('./view/admin/admin_header.php');
?>

<body>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">cinema_name</th>
                <th scope="col">Approve</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($result as $row) {
            ?>
                <tr>
                    <td><?= $row['cinema_name'] ?></td>
                    <td><a href="?cat=admin&op=checkCinema&action=accept&item=<?= $row['cinema_id'] ?>"><i class="material-icons"> done </i></a></td>
                    <td><a href="?cat=admin&op=checkCinema&action=deny&item=<?= $row['cinema_id'] ?>"><i class="material-icons"> do_not_disturb_on </i></a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <a href="?cat=admin&op=createItem&page=2"><i class="material-icons"> add</i></a>
    <?php
    include('./view/admin/admin_footer.php');
