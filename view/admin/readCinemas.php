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
                    <td><a href="?cat=admin&op=checkCinema&action=disable&item=<?= $row['cinema_id'] ?>"><i class="material-icons"> disable </i></a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <?php
    include('./view/admin/admin_footer.php');
