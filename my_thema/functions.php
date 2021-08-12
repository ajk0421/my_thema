<?php
  function add_stylesheet() {
    wp_register_style('style', get_stylesheet_directory_uri().'/style.css');
    wp_enqueue_style('style', '', array(), '1.0', false);

    wp_register_style('sass-style', get_stylesheet_directory_uri().'/sass/style.css');
    wp_enqueue_style('sass-style', '', array(), '1.0', false);

  }
  add_action('wp_enqueue_scripts', 'add_stylesheet');
?>