<?php

function jp_post_types() {

  register_post_type('diary', [
    'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
    'rewrite' => ['slug' => 'diary'],
    'public' => true,
    'show_in_rest' => true,
    'labels' => [
      'name' => 'Diary',
      'add_new' => 'Add New Diary Entry',
      'add_new_item' => 'Add New Diary Entry',
      'edit_item' => 'Edit Diary Entry',
      'all_items' => 'All Diary Entries',
      'singular_name' => 'Diary Entry'
    ],
    'menu_icon' => 'dashicons-book'
  ]);


} // End of jp_post_types

add_action('init', 'jp_post_types');
