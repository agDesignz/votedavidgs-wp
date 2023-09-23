<?php
  get_header();

  while(have_posts()) {
    the_post();
    // display_page_banner();
    $current_page = get_queried_object();
    // $image = get_field('page_background_image');
    //   if( $image ):
    //   // Image variables.
    //   $url = $image['url'];
    //   $title = $image['title'];
    //   $alt = $image['alt'];
    //   $caption = $image['caption'];
    //   // Thumbnail size attributes.
    //   $size = 'thumbnail';
    //   $thumb = $image['sizes'][ $size ];
    //   $width = $image['sizes'][ $size . '-width' ];
    //   $height = $image['sizes'][ $size . '-height' ];
    //   endif;
?>

<section class="vision-top page-section background--green">
  <div class="wrapper grid grid--1-col grid--gap-h-md">
    <div class="vision-top__heading-box u-text-center">
      <h1 class="heading-1"><?php the_title(); ?></h1>
      <h2 class="heading-2"><?php the_field('page_subtitle'); ?></h2>
    </div>
    <div class="row row--md">
      <figure class="vision-top__figure row__md-half">
        <img src="<?php echo get_field('page_image_1')['url']; ?>" alt="">
      </figure>
      <div class="row__md-half">
        <?php the_field('page_text_1') ?>
      </div>
    </div>
    <div class="row row--md-r">
      <figure class="vision-top__figure row__md-half">
        <img src="<?php echo get_field('page_image_2')['url']; ?>" alt="">
      </figure>
      <div class="row__md-half">
        <?php the_field('page_text_2') ?>
      </div>
    </div>
  </div>
</section>

<section class="about-intro page-section">
  <div class="content-box content-box--narrow grid--gap">
    <!-- <h2 class="heading-2 text-purple">The central challenge of our city is one of priorities</h2>
    <p>our leaders are prioritizing ambitious and grandiose projects that are leaving us unable to satisfy our fundamental governmental responsibilities. There is perhaps no better example of this than the proposed, and absolutely unnecessary, expansion of the Como Pavilion – a beloved building in great condition – right here in Ward 5.</p>
    <p>How can we continue to push projects like this while so many of our people and services are being neglected?</p>
    <h2 class="heading-2 text-green">To have a functional city, we need to readjust our priorities</h2>
    <p>Let's start by paying our firefighters and supporting them with a good contract.</p><p>Let's repair the roads, not with patchwork fixes, but with lasting repairs.</p><p>Let's find a way to improve the mediocre snow-shoveling services that left so many people stuck this past winter.</p><p>Let's find real solutions to address the rising violence and insecurity across the city.</p><p>And let's stop talking about addressing the challenge of homelessness; let's start funding real actions to help address this.</p> -->

    <?php the_field('page_text_3'); ?>
  </div>
</section>

<section class="page-section background--purple">
  <div class="wrapper grid grid--gap grid--gap-h">
    <div class="grid__item grid__item--ctr">
      <h2 class="heading-2 heading-2--larger u-text-center"><?php the_field('page_heading_1'); ?></h2>
    </div>

<?php vision_priority([
  'fieldNumber' => '4'
]); ?>

<?php vision_priority([
  'fieldNumber' => '5'
]); ?>

<?php vision_priority([
  'fieldNumber' => '6'
]); ?>

  </div>
</section>

<?php } wp_reset_postdata();
   ?>

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
