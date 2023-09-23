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

<?php } wp_reset_postdata();
   ?>


<?php
    get_footer();
  ?>
