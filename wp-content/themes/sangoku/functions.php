<?php 

wp_enqueue_style("reset", get_template_directory_uri() . '/assets/css/reset.css');
wp_enqueue_style("sangoku", get_template_directory_uri() . '/assets/css/sangoku.css');

function sangoku_custom_excerpt_length($length) {
    return 25;
}

add_filter('excerpt_length', 'sangoku_custom_excerpt_length',999);

function sangoku_custom_title($title) {
    return "♡ " . $title;
}

add_filter('the_title', 'sangoku_custom_title',999);