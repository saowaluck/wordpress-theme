<?php

function my_theme_enqueue_style(){
    $src = get_template_directory_uri() . '/style.css';
    wp_enqueue_style( 'parent-style', $src);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_style');

wp_register_style( 'Bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
wp_enqueue_style( 'Bootstrap4' );