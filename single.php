<?php
  get_header();

  while(have_posts()) {
    the_post();
    banner_simple();
?>
<section class="about-intro page-section">
  <div class="content-box content-box--narrow">
    <?php the_content(); ?>
  </div>
</section>

<?php } wp_reset_postdata();
   ?>


<?php
    get_footer();
  ?>
