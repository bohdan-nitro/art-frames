<?php
// регистрируем стили (хук)
add_action('wp_enqueue_scripts', 'register_theme_styles');

// регистрируем файл стилей и добавляем его в очередь
function register_theme_styles() {

    wp_register_style('default-style', get_stylesheet_directory_uri());
    wp_enqueue_style('default-style');

    wp_register_style('main-style', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style('main-style');

}