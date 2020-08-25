<?php

function theme_files() {
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Merriweather:wght@900&family=Poppins:wght@100;400&display=swap');
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css');
    wp_enqueue_style('theme_main_styles', get_stylesheet_uri(), NULL, microtime());
}

function theme_scripts() {
    wp_enqueue_script('theme_main_scripts', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), null, true);
}


add_action('wp_enqueue_scripts', 'theme_files');
add_action('wp_enqueue_scripts', 'theme_scripts');

?>