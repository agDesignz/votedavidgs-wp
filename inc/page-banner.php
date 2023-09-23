<?php

function page_banner($args = NULL) {

 ?>


<div class="page-banner">
    <div class="page-banner__background page-banner__background--group">
      <!-- <div class="page-banner__filter"></div> -->
    </div>
    <div class="page-banner__content wrapper--medium">
    <?php if(get_the_post_thumbnail()) { ?>
      <figure class="page-banner__figure">
      <?php the_post_thumbnail(); ?>
    </figure>
  <?php } ?>
      <div class="page-banner__text">
        <h2 class="page-banner__heading"><?php the_title();?></h2>
        <h3 class="page-banner__subheading heading-3">
          <?php
            if(get_field('page_subtitle')) echo get_field('page_subtitle');
          ?>
        </h3>
      </div>
    </div>

  </div>

<?php } ?>
