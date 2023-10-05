<?php
  get_header();

  while(have_posts()) {
    the_post();
    page_banner();
?>

<section class="about-intro page-section">
  <div class="content-box content-box--narrow">
    <?php
      $current_page = get_queried_object();
      $content      = apply_filters( 'the_content', $current_page->post_content );
      echo $content;
    ?>
    <a class="btn btn--text btn--text--green" href="<?php echo esc_url(site_url('/wp-content/uploads/2023/09/dgs_CV_2023.pdf')); ?>">Curriculum Vitae <span>&#8640;</span></a>
  </div>
</section>

<section class="about-news page-section page-section--bottom-padding">
  <div class="content-box content-box--narrow">
    <p>I've been an active community member, and have contributed to many policy debates. Here are some examples:</p>
    <?php the_field('page_text_1') ?>
  </div>
</section>

<?php } wp_reset_postdata();
   ?>


<?php
    get_footer();
  ?>
