<?php
include('./view/header_home.php');
?>

<div class="slider">
  <div class="slide_viewer">
    <div class="slide_group">
      <div class="slide">
      </div>
      <div class="slide">
      </div>
      <div class="slide">
      </div>
      <div class="slide">
      </div>
    </div>
  </div>
</div><!-- End // .slider -->

<div class="slide_buttons">
</div>

<div class="directional_nav">
  <div class="previous_btn" title="Previous">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
      <g>
        <g>
          <path fill="#C4E538" d="M-10.5,22.118C-10.5,4.132,4.133-10.5,22.118-10.5S54.736,4.132,54.736,22.118
			c0,17.985-14.633,32.618-32.618,32.618S-10.5,40.103-10.5,22.118z M-8.288,22.118c0,16.766,13.639,30.406,30.406,30.406 c16.765,0,30.405-13.641,30.405-30.406c0-16.766-13.641-30.406-30.405-30.406C5.35-8.288-8.288,5.352-8.288,22.118z" />
          <path fill="#C4E538" d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0	c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564	c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z" />
        </g>
      </g>
    </svg>
  </div>
  <div class="next_btn" title="Next">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
      <g>
        <g>
          <path fill="#C4E538" d="M22.118,54.736C4.132,54.736-10.5,40.103-10.5,22.118C-10.5,4.132,4.132-10.5,22.118-10.5	c17.985,0,32.618,14.632,32.618,32.618C54.736,40.103,40.103,54.736,22.118,54.736z M22.118-8.288	c-16.765,0-30.406,13.64-30.406,30.406c0,16.766,13.641,30.406,30.406,30.406c16.768,0,30.406-13.641,30.406-30.406 C52.524,5.352,38.885-8.288,22.118-8.288z" />
          <path fill="#C4E538" d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035 			L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z" />
        </g>
      </g>
    </svg>
  </div>
</div><!-- End // .directional_nav -->

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
        <figure class="span__20">
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
        <figure class="span__20">
          <img src="<?= $row['img'] ?>" alt="About 1">
        </figure>

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
<div class="cinemas_homepage">
  <h2 style="text-align: center">Uitgelichte Bioscopen</h2>

  <div class="container1">
    <div class="grid">
      <?php
      foreach ($cinema_highlighted as $row) {
      ?>
        <div class="grid__item">
          <div class="card"><img class="card__img" src="<?= $row['cinema_image'] ?>" alt="Canyons">
            <div class="card__content">
              <h2 class="card__header"><?= $row['cinema_name'] ?></h2>
              <div class="card__description" id="cinema_<?= $row['cinema_id'] ?>">
                <?= $row['cinema_description'] ?>
                <!-- <button onclick="cinemaReadMore(<?= $row['cinema_id'] ?>)">Read more</button> -->
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</div>


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>


<script>


</script>

<?php
include('./view/footer_home.php');
