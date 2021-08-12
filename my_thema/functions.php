<?php

  // CSS読み込み
  function add_stylesheet() {
    wp_enqueue_style('style', get_stylesheet_directory_uri().'/style.css', array(), '1.0', false);
    wp_enqueue_style('sass-style', get_stylesheet_directory_uri().'/sass/style.css', array(), '1.0', false);

  }
  add_action('wp_enqueue_scripts', 'add_stylesheet');

  // JS読み込み
  function add_javascripts() {
	  wp_enqueue_script('application', get_stylesheet_directory_uri().'/javascripts/application.js');
  }
  add_action( 'wp_enqueue_scripts', 'add_javascripts' );
?>