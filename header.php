<!DOCTYPE html>
<html  <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php
    wp_head();
  ?>

  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <title>David Greenwood-Sanchez for St. Paul City Council Ward 5</title>
</head>

<body <?php body_class( 'class-name' ); ?>>
  <header class="header">
    <div class="header__container">

        <a href="<?php echo esc_url(site_url()); ?>" class="header__logo">
          <img src="<?php echo get_theme_file_uri('/images/logo-2.png'); ?>" alt="David Greenwood-Sanchez Logo">
        </a>

        <div class="header__nav">
          <a href="https://www.facebook.com/votedavidgs" class="header__soc">
            <svg class="header__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/></svg>
          </a>
          <a href="<?php echo esc_url(site_url('/get-involved/#donate')); ?>" class="header__donate-box"><h3 class="header__donate-text">DONATE</h3></a>
          <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="nav-toggle">
            <label for="nav-toggle" class="navigation__button">
              <span class="navigation__icon">&nbsp;</span>
            </label>
            <div class="navigation__background">
              <nav class="navigation__nav">
                <?php
  wp_nav_menu([
    'theme_location' => 'headerMenuLocation',
    // 'menu_class' => 'navigation__list',
    // 'container' => 'null'
  ]);
?>
                <!-- <ul class="navigation__list">
                  <li class="navigation__item"><a href="index.html" class="navigation__link">Home</a></li>
                  <li class="navigation__item"><a href="about.html" class="navigation__link">About</a></li>
                  <li class="navigation__item"><a href="vision.html" class="navigation__link">Vision</a></li>
                  <li class="navigation__item"><a href="vision.html" class="navigation__link">Community</a></li>
                  <li class="navigation__item"><a href="getinvolves.html" class="navigation__link">Get Involved</a>
                  </li>
                </ul> -->
              </nav>
            </div>
          </div> <!-- navigation -->
        </div> <!-- header__nav -->



    </div>
  </header>
  <main>
