<?php

function banner_horizon($args = NULL) {

 ?>


<div class="banner-horizon">
    <div class="banner-horizon__background banner-horizon__background--group">
    </div>
      <div class="banner-horizon__content">
        <figure class="banner-horizon__photo-bg">
          <img src="<?php echo get_theme_file_uri('/images/david-brick-h.jpg'); ?>" alt="David in front of a brick wall">
        </figure>
        <div class="banner-horizon__filter"></div>
        <div class="banner-horizon__text">
          <h2 class="banner-horizon__heading"><?php the_title();?></h2>
          <h3 class="banner-horizon__subheading heading-3">
            <?php
              if(get_field('page_subtitle')) echo get_field('page_subtitle');
            ?>
          </h3>
        </div>
      </div>


  </div>

<?php } ?>
