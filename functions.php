<?php

function jp_files() {
  wp_enqueue_style('jp-stylesheet', get_theme_file_uri('/build/index.css'));
  wp_enqueue_style('font-lato', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&display=swap');
  wp_enqueue_style('font-montserrat', '//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap');
  wp_enqueue_script('main_jp_javascript', get_theme_file_uri('build/index.js'), [], '1.0', true);
}

add_action('wp_enqueue_scripts', 'jp_files');

function jp_features() {
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'jp_features');