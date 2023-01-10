<?php

include('./view/admin/admin_header.php');
?>

<body>
    <div class="m-4">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Text</th>
                    <th scope="col">edit</th>
                    <th scope="col">disable</th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $row) {
                    if ($row['cinema_id'] == $_SESSION['cinema_id']) {
                        continue;
                    }
                ?>
                    <tr>
                        <td><?= $row['cinema_id'] ?></td>
                        <td><?= $row['cinema_name'] ?></td>
                        <td><?= $row['cinema_description'] ?></td>
                        <td><a href="?cat=admin&op=editCinemaPage&item=<?= $row['cinema_id'] ?>"><i class="material-icons"> edit </i></a></td>
                        <td><a href="?cat=admin&op=activeCinemas&action=disable&item=<?= $row['cinema_id'] ?>"><i class="material-icons"> do_not_disturb_on </i></a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
        <?php
        include('./view/admin/admin_footer.php');
