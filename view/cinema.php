<?php

include('./view/header_home.php')
?>
<i class="fas fa-chevron-left"></i> <a href="?cat=home&op=cinemasOverview"> Terug naar overzicht </a>
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
        </div>


        </div>
    </article>
<?php
}
?>

<?php
include('./view/footer_home.php');
