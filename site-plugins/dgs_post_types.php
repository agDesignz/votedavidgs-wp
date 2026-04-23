<?php

function dgs_post_types() {

  register_post_type('vison', [
    'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
    'rewrite' => ['slug' => 'visons'],
    'public' => true,
    'show_in_rest' => true,
    'labels' => [
      'name' => 'Visions',
            'add_new_item' => 'Add New Vision',
      'edit_item' => 'Edit Vision',
      'all_items' => 'All Visions',
      'singular_name' => 'Vision'
    ],
    'menu_icon' => 'dashicons-visibility'
  ]);

  register_post_type('voice', [
    'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
    'rewrite' => ['slug' => 'voices'],
    'public' => true,
    'show_in_rest' => true,
    'labels' => [
      'name' => 'Voices',
            'add_new_item' => 'Add New Voice',
      'edit_item' => 'Edit Voice',
      'all_items' => 'All Voices',
      'singular_name' => 'Voice'
    ],
    'menu_icon' => 'dashicons-megaphone'
  ]);


} // End of jp_post_types

add_action('init', 'dgs_post_types');
