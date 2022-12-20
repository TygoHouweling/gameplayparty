<?php

include('./view/header_home.php')
?>
  <?php
  foreach ($result as $item) {
  ?>
    <article class="stack__card">
      <figure class="span__50"> <img src="./view/img/001.jpg"></img>

      </figure>
      <div class="stack__card__content">
        <h2 class="stack__card__title"><?= $item['cinema_name'] ?></h2>
        <p><?= $item['cinema_description'] ?>
        </p>
        <span class="popuptext" id="myPopup"></span>
        <a href="?cat=home&op=cinema&item=<?= $item['cinema_id'] ?>">Details</a>
      </div>


      </div>
    </article>
  <?php
  }
  ?>

<?php
include('./view/footer_home.php');