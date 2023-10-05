<?php
  get_header();

  while(have_posts()) {
    the_post();
?>

<?php
home_hero();
}
      ?>

<section class="page-section">
  <div class="wrapper wrapper--narrow">
    <div class="grid grid--1-col grid--gap grid--center">
      <h2 class="heading-2 heading-2--larger text-purple">Meet David</h2>
      <p>I am a political scientist, devoted community member, and Como resident seeking to bring a reasonable and independent voice to our City Council. I’ve devoted most of my professional career to public policy research and community activism, and I have a long record of success in what I have done. I am also proudly Peruvian-Minnesotan. I look forward to contributing my background and experiences to support my community, and to get St. Paul back on track.</p>
      <a href="<?php echo esc_url(site_url('/about')); ?>" class="btn btn--green">Learn More</a>
      <br>
      <h2 class="heading-2 heading-2--larger text-purple">Why I'm Running</h2>
      <p>I’m running for council because our city needs a new voice and new ideas. St. Paul is facing some serious challenges – housing (un)affordability, crime and insecurity, an alarmingly vacant downtown, and some very serious struggles to balance the budget. This is without even mentioning the deeper challenges of homelessness, poverty, and disinvestment in our communities. We can’t continue with our current brand of insider politics; we need change.</p>
      <p>I am running to bring an honest, independent, and reasonable voice to the council, and to address these challenges in a real way. In particular, I am running to return voice to our neighborhoods, to balance the budget responsibly, and to promote “real” affordable housing, strong public schools, and a healthy environment.</p>
      <a href="<?php echo esc_url(site_url('/visons/why-im-running')); ?>" class="btn btn--green">Learn More</a>
    </div>
  </div>
</section>

<section class="page-section background--purple" id="vision">
  <div class="wrapper">
    <div class="grid grid--section">
      <div class="grid__item grid__item--ctr">
        <h2 class="heading-2 heading-2--larger">Vision</h2>
      </div>
      <div class="grid grid--stretch grid--gap grid--gap-h-lg">

        <div class="feature grid grid--center grid--1-col grid__item grid__item--sm-6 grid__item--lg-3">
          <figure class="feature__fig">
            <img class="feature__icon" src="<?php echo get_theme_file_uri('/images/icons/community.svg') ?>" alt="Icon of people and a megaphone" />
          </figure>
          <h3 class="feature__heading heading-3">Community</h3>
          <p class="feature__text">Restore the voice of our neighborhoods</p>
          <a href="<?php echo esc_url(site_url('/visons/community-voice')); ?>" class="feature__link">
            <h3 class="text-purple btn">Learn More</h3>
          </a>
        </div>

        <div class="feature grid grid--center grid--1-col grid__item grid__item--sm-6 grid__item--lg-3">
          <figure class="feature__fig">
            <img class="feature__icon" src="<?php echo get_theme_file_uri('/images/icons/finance.svg') ?>" alt="Icon of a piggy bank" />
          </figure>
          <h3 class="feature__heading heading-3">Public Finance</h3>
          <p class="feature__text">Balance the budget responsibly</p>
          <a href="<?php echo esc_url(site_url('/visons/community-voice')); ?>" class="feature__link">
            <h3 class="text-purple btn">Learn More</h3>
          </a>
        </div>

        <div class="feature grid grid--center grid--1-col grid__item grid__item--sm-6 grid__item--lg-3">
          <figure class="feature__fig">
            <img class="feature__icon" src="<?php echo get_theme_file_uri('/images/icons/services.svg') ?>" alt="Icon of a road" />
          </figure>
          <h3 class="feature__heading heading-3">Services</h3>
          <p class="feature__text">Promote affordable housing, strong public schools, and a healthy environment</p>
          <a href="<?php echo esc_url(site_url('/visons/community-voice')); ?>" class="feature__link">
            <h3 class="text-purple btn">Learn More</h3>
          </a>        </div>

        <div class="feature grid grid--center grid--1-col grid__item grid__item--sm-6 grid__item--lg-3">
          <figure class="feature__fig">
            <img class="feature__icon" src="<?php echo get_theme_file_uri('/images/icons/diversity.svg') ?>" alt="Icon of different shapes" />
          </figure>
          <h3 class="feature__heading heading-3">Diversity</h3>
          <p class="feature__text">Elect St. Paul's first Latino Councilmember</p>
          <a href="<?php echo esc_url(site_url('/visons/community-voice')); ?>" class="feature__link">
            <h3 class="text-purple btn">Learn More</h3>
          </a>        </div>

      </div>
    </div>
  </div>
</section>

<section class="page-section">
  <div class="wrapper">
    <div class="grid grid--section">
      <div class="grid__item grid__item--ctr">
        <h2 class="heading-2 heading-2--larger text-green">Get Involved</h2>
      </div>

      <div class="grid grid--gap">

        <?php
      $homepagePosts = new WP_Query([
        'posts_per_page' => 3,
        'category_name' => 'home-page'
      ]);

      while ($homepagePosts->have_posts()) {
        $homepagePosts->the_post();
    ?>

      <a href="<?php echo esc_url(site_url('/get-involved')); ?>" class="box-link grid__item grid__item--md-4">
        <div class="box-link__container u-center-bg" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
          <div class="box-link__bg">
              <h3 class="box-link__title"><?php the_title(); ?></h3>
              <div class="box-link__excerpt">
                    <?php if (has_excerpt()) {
                      the_excerpt();
                    } else {
                      ?><p class="box-link__text"><?php echo wp_trim_words(get_the_content(), 40);?></p><?php
                    }?>
              </div>
          </div>
        </div>
      </a>

      <?php } wp_reset_postdata();
         ?>

      </div>

    </div>
  </div>
</section>

<?php
    get_footer();
  ?>
