<?php
// Theme setup
function my_simple_theme_setup() {
    // Add dynamic title tag support
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'my_simple_theme_setup');
wp_enqueue_style('style', get_stylesheet_uri());
