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
          <path fill="#474544" d="M-10.5,22.118C-10.5,4.132,4.133-10.5,22.118-10.5S54.736,4.132,54.736,22.118
			c0,17.985-14.633,32.618-32.618,32.618S-10.5,40.103-10.5,22.118z M-8.288,22.118c0,16.766,13.639,30.406,30.406,30.406 c16.765,0,30.405-13.641,30.405-30.406c0-16.766-13.641-30.406-30.405-30.406C5.35-8.288-8.288,5.352-8.288,22.118z" />
          <path fill="#474544" d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0	c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564	c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z" />
        </g>
      </g>
    </svg>
  </div>
  <div class="next_btn" title="Next">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
      <g>
        <g>
          <path fill="#474544" d="M22.118,54.736C4.132,54.736-10.5,40.103-10.5,22.118C-10.5,4.132,4.132-10.5,22.118-10.5	c17.985,0,32.618,14.632,32.618,32.618C54.736,40.103,40.103,54.736,22.118,54.736z M22.118-8.288	c-16.765,0-30.406,13.64-30.406,30.406c0,16.766,13.641,30.406,30.406,30.406c16.768,0,30.406-13.641,30.406-30.406 C52.524,5.352,38.885-8.288,22.118-8.288z" />
          <path fill="#474544" d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035 			L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z" />
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
<div class="container1">
  <div class="grid">
    <div class="grid__item">
      <div class="card"><img class="card__img" src="https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2250&amp;q=80" alt="Snowy Mountains">
        <div class="card__content">
          <h1 class="card__header">A starry night</h1>
          <p class="card__text">Look up at the night sky, and find yourself <strong>immersed</strong> in the amazing mountain range of Aspen. </p>
          <button class="card__btn">Explore <span>&rarr;</span></button>
        </div>
      </div>
    </div>
    <div class="grid__item">
      <div class="card"><img class="card__img" src="https://images.unsplash.com/photo-1485160497022-3e09382fb310?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2250&amp;q=80" alt="Desert">
        <div class="card__content">
          <h1 class="card__header">Misty mornings</h1>
          <p class="card__text">Capture the stunning <strong>essence</strong> of the early morning sunrise in the Californian wilderness.</p>
          <button class="card__btn">Explore <span>&rarr;</span></button>
        </div>
      </div>
    </div>
    <div class="grid__item">
      <div class="card"><img class="card__img" src="https://images.unsplash.com/photo-1506318164473-2dfd3ede3623?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3300&amp;q=80" alt="Canyons">
        <div class="card__content">
          <h1 class="card__header">Utah sunsets</h1>
          <p class="card__text">Sunsets over the <strong>stunning</strong> Utah Canyonlands, is truly something much more than incredible.</p>
          <button class="card__btn">Explore <span>&rarr;</span></button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include('./view/footer_home.php');
