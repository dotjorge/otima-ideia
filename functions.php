<?php

add_theme_support( 'post-thumbnails' );
function add_theme_scripts() {
  wp_enqueue_style( 'teste', get_stylesheet_uri());
  wp_enqueue_script( 'header', get_template_directory_uri() . '/js/header.js', array ( 'jquery' ), 1.1, true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );








