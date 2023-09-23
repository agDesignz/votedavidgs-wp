<?php
  function post_box($args = NULL) {

  // $postBox = new WP_Query([
  //   'post_type' => $args['postType']
  // ]);
  //
  // while($postBox->have_posts()) {
  //   $postBox->the_post();
    ?>

  <div class="post-box">
    <figure class="post-box__image">
      <?php if(has_post_thumbnail()) {
        the_post_thumbnail();
      } else {
        ?><img src="<?php echo get_theme_file_uri('/images/filler-photo.jpg'); ?>" alt="Image with text promoting the candidate"><?php
      }?>
    </figure>
    <div class="post-box__text">
      <h3 class="post-box__title heading-3 heading-3--larger"><?php the_title();?></h3>
      <div class="post-box__content">
        <?php
          if(has_excerpt()) {
            the_excerpt();
          } else {?>
              <p>
                <?php echo wp_trim_words(get_the_content(), 40); ?>
              </p>
          <?php }
            ?>
      </div>
      <div class="post-box__button">
        <a href="<?php the_permalink(); ?>" class="post-box__btn btn btn--text">Read More <span>&#8640;</span></a>
      </div>
    </div>
  </div>
 <?php } wp_reset_postdata();

    ?>
