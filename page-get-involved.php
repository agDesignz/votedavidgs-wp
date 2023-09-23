<?php
  get_header();

  while(have_posts()) {
    the_post();
    banner_horizon();
?>

<section class="page-section">
  <div class="wrapper">
    <div class="grid grid--1-col grid--gap-h-md">
      <div class="content-box content-box--narrow">
        <?php
          $current_page = get_queried_object();
          $content      = apply_filters( 'the_content', $current_page->post_content );
          echo $content;
        ?>
      </div>
    </div>
  </div>
</section>

<section class="page-section background--green">
  <div class="wrapper">
    <div class="grid grid--1-col grid--gap-h-md">
      <div class="content-box content-box--narrow grid--center">
        <a href="https://secure.actblue.com/donate/votedavidgs" class="btn btn--outline btn--lg">DONATE</a>
        <h3 class="heading-3">Your contributions make a real difference and are much appreciated</h3>
      </div>
    </div>
  </div>
</section>

<section class="page-section">
  <div class="wrapper">
    <div class="grid grid--1-col grid--gap-h-md">
      <div class="row row--md">
        <figure class="row__figure">
          <img src="<?php echo get_field('page_image_1')['url']; ?>" alt="<?php echo get_field('page_image_1')['alt']; ?>">
        </figure>
        <div class="row__md-1 grid grid--1-col grid--gap">
          <h2 class="heading-2 text-purple">Go Door Knocking</h2>
          <?php the_field('page_text_1') ?>
          <a href="mailto:votedavidgs@gmail.com" class="btn btn--text btn--text--green">GET IN TOUCH <span>&#8640;</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="page-section background--purple">
  <div class="wrapper">
    <div class="grid grid--1-col grid--gap-h-md">
      <div class="row row--md-r">
        <figure class="row__figure">
          <img src="<?php echo get_field('page_image_2')['url']; ?>" alt="<?php echo get_field('page_image_2')['alt']; ?>">
        </figure>
        <div class="row__md-1 grid grid--1-col grid--gap">
          <h2 class="heading-2">Request a lawn sign</h2>
          <?php the_field('page_text_2') ?>
          <a href="mailto:votedavidgs@gmail.com" class="btn btn--text btn--text--white">GET IN TOUCH <span>&#8640;</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php } wp_reset_postdata();
  ?>

<?php get_footer(); ?>
