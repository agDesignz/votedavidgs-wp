<?php

function banner_simple($args = NULL) {

 ?>


<div class="banner-simple">
        <div class="banner-simple__text">
          <h2 class="banner-simple__heading"><?php the_title();?></h2>
          <h3 class="banner-simple__subheading heading-3">
            <?php
              if(get_field('page_subtitle')) echo get_field('page_subtitle');
            ?>
          </h3>
        </div>


  </div>

<?php } ?>
