<?php

include('./view/header_home.php')
?>




<div class="card-container ">

<?php
  foreach ($result as $row) {

    if (!isset($even) || $even == false) {
  ?>
      <article class="stack__card">
        <figure class="span__20">
          <img src="<?= $row['cinema_image'] ?>" alt="About 1">
        </figure>
        <div class="stack__card__content">
          <h2 class="stack__card__title"><?= $row['cinema_name'] ?></h2>
          <p><?= $row['cinema_description'] ?></p>
          <a href="?cat=home&op=cinema&item=<?= $row['cinema_id'] ?>">Lees meer over deze bioscoop</a>
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
          <h2 class="stack__card__title"><?= $row['cinema_name'] ?></h2>
          <p><?= $row['cinema_description'] ?></p>
        </div>
        <figure class="span__20">
          <img src="<?= $row['cinema_image'] ?>" alt="About 1">
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
?>