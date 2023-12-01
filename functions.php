<?php

require get_theme_file_path('/inc/page-banner.php');
require get_theme_file_path('/inc/banner-horizon.php');
require get_theme_file_path('/inc/banner-simple.php');
require get_theme_file_path('/inc/contact-form.php');
require get_theme_file_path('/inc/home-hero.php');
require get_theme_file_path('/inc/post-box.php');
require get_theme_file_path('/inc/vision-priority.php');

function dgs_files() {
  wp_enqueue_style('dgs_styles', get_theme_file_uri('/build/index.css'));
  wp_enqueue_script('main_dgs_javascript', get_theme_file_uri('/build/index.js'), [], '1.0', true);
}

add_action('wp_enqueue_scripts', 'dgs_files');

function dgs_features() {
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('squareImg', 400, 400, true);
}

add_action('after_setup_theme', 'dgs_features');


// Body Class From Slug: https://www.wpbeginner.com/wp-themes/how-to-add-page-slug-in-body-class-of-your-wordpress-themes/

function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '--' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

// Send email via SMTP
// add_action( 'phpmailer_init', 'contact_form_mail' );
// function contact_form_mail( $phpmailer ) {
//     $phpmailer->isSMTP();
//     $phpmailer->Host = SMTP_HOST;
//     $phpmailer->SMTPAuth = SMTP_AUTH;
//     $phpmailer->Port = SMTP_PORT;
//     $phpmailer->Username = SMTP_USER;
//     $phpmailer->Password = SMTP_PASS;
//     $phpmailer->SMTPSecure = SMTP_SECURE;
//     $phpmailer->From = SMTP_FROM;
//     $phpmailer->FromName = SMTP_NAME;
// }
