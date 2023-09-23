<?php
  get_header();

  while(have_posts()) {
    the_post();
    display_page_banner();
?>

<section class="about-intro page-section page-section--top-padding">
  <div class="content-box content-box--narrow">
    <?php
      $current_page = get_queried_object();
      $content      = apply_filters( 'the_content', $current_page->post_content );
      echo $content;
    ?>
  </div>
</section>

<?php } wp_reset_postdata();
   ?>

<section class="page-section">
  <div class="wrapper">
    <div class="grid grid--gap-v grid--gap-h-lg">

      <?php
      $voices = new WP_Query([
        'post_type' => 'voice'
      ]);

      while($voices->have_posts()) {
        $voices->the_post();
       ?>

      <div class="grid__item grid__item--md-4">
        <div class="content-box content-box--narrow--half grid grid--gap grid--1-col">
          <figure class="figure--round">
            <?php the_post_thumbnail('squareImg'); ?>
          </figure>
          <div class="grid grid--1-col grid--center">
            <h3 class="heading-3 heading-3--larger u-text-center u-margin-b--sm text-purple"><?php the_title();?></h3>
            <?php the_content(); ?>
          </div>
        </div>
      </div>

      <?php }wp_reset_postdata(); ?>

    </div>
  </div>
</section>

<?php
    get_footer();
  ?>
