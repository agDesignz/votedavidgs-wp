<?php
  get_header();

  while(have_posts()) {
    the_post();
    banner_simple();
  } ?>

<section class="page-section">
 <div class="wrapper grid grid--1-col grid--gap-h">

   <?php
   $visions = new WP_Query([
     'post_type' => 'vison'
   ]);

   while($visions->have_posts()) {
     $visions->the_post();
     post_box();
   } wp_reset_postdata();
   ?>

 </div>

</section>


<?php
   get_footer();
 ?>
