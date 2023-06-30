<?php

// Добавление стилей
add_action( 'wp_enqueue_scripts', function () {
  wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/style.css' );
  
});

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
set_post_thumbnail_size(full, full, true);
?>