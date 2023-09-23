<?php
get_header();
while(have_posts()) {
  the_post();
?>

<div class="page-top">
  <div class="page-top__background page-top__background--index">
    <!-- <div class="page-top__filter"></div> -->
  </div>
  <div class="page-top__content wrapper--medium">
    <figure class="page-top__figure">
      <?php the_post_thumbnail(); ?>
    </figure>
    <div class="page-top__text">
      <h2 class="heading-secondary"><?php the_title();?></h2>
      <!-- <h3 class="page-top__subheading heading-tertiary"><?php the_title();?></h3> -->
    </div>
  </div>

</div>

<section class="page-section">
  <div class="wrapper">
    <div class="content-box content-box--narrow">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php
}
get_footer();
?>