<?php
  function vision_priority($args = NULL) {
?>

<div class="grid grid--1-col grid__item grid__item--md-4 grid--center grid--gap grid--min">
    <figure class="figure--h-150">
      <img src="<?php echo get_field('page_image_'.$args['fieldNumber'])['url']; ?>" alt="<?php echo get_field('page_image_'.$args['fieldNumber'])['url']; ?>">
    </figure>
    <div class="grid grid--1-col grid--center">
      <h3 class="heading-3 heading-3--larger u-text-center u-margin-b--sm"><?php the_field('page_heading_'.$args['fieldNumber']); ?></h3>
      <?php the_field('page_text_'.$args['fieldNumber']); ?>
    </div>
</div>

<?php } ?>
