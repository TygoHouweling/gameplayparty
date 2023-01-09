<?php
include('./view/header_home.php');
?>

<div>
<h1 class="Header-text"> <?= $result[0]['h1'] ?></h1>
<!-- this container holds the articles and centers them -->
<div class="card-container ">
    <div style="color:white; text-align: center; font-size: 2em;" class="fade">
    </div>

    <?php
    foreach ($result as $row) {

        if (!isset($even) || $even == false) {
    ?>
            <article class="stack__card">
                <figure class="span__30">
                    <img src="<?= $row['img'] ?>" alt="About 1">
                </figure>
                <div class="stack__card__content">
                    <h2 class="stack__card__title"><?= $row['header'] ?></h2>
                    <p><?= $row['text'] ?></p>
                </div>

                <div>
                </div>
            </article>
        <?php
            $even = true;
        } else {
        ?>
            <article class="stack__card">
                <div class="stack__card__content">
                    <h2 class="stack__card__title"><?= $row['header'] ?></h2>
                    <p><?= $row['text'] ?></p>
                </div>
                <figure class="span__30">
                    <img src="<?= $row['img'] ?>" alt="About 1">
                </figure>
                <div>
                </div>
            </article>
        <?php
            $even = false;
        }
        ?>

    <?php
    }
    ?>
</div>
</div>


<?php
include('./view/footer_home.php');
