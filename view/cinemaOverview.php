<?php

include('./view/header_home.php')
?>




<div class="card-container ">

  <?php
  foreach ($result as $item) {

  ?>
      <article class="stack__card">
        <figure class="span__30">
          <img width="" src="<?= $item['img'] ?>" alt="About 1">
        </figure>
        <div class="stack__card__content">
          <h2 class="stack__card__title"><?= $item['cinema_name'] ?></h2>
          <p><?= $item['cinema_description'] ?></p>
          <a href="?cat=home&op=cinema&item=<?= $item['cinema_id'] ?>">Details</a>
        </div>

        <div>
        </div>
      </article>
    <?php  } ?>

</div>
</div>
<?php
include('./view/footer_home.php');
?>