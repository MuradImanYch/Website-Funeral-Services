<?php
add_action('wp_enqueue_scripts', 'load_scripts');
add_filter('show_admin_bar', '__return_false');

function load_scripts() {
    wp_enqueue_style('style', get_template_directory_uri() . '/styles/style.css', true);
    wp_enqueue_style( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), '6.8.4', 'all' );

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-2.0.0.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array('jquery'), '6.8.4', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/scripts/script.js', array('jquery'), true);
}

function load_images($name) {
    echo get_template_directory_uri() . '/assets/' . $name;
}

?>