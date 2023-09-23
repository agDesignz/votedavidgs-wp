<?php

function home_hero() { ?>

  <section class="home-hero u-center-bg" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
    <div class="home-hero__filter">
      <div class="home-hero__container">
        <div class="home-hero__content">
          <h1 class="home-hero__heading heading-1">
            Restoring the Voice of our Neighborhoods
          </h1>
        </div>
      </div>
    </div>
  </section>

  <?php } ?>
