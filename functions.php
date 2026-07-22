<?php

function motortech_setup(){

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    register_nav_menus(array(

        'main_menu'=>'Главное меню'

    ));

}

add_action(

    'after_setup_theme',

    'motortech_setup'

);

function motortech_scripts(){

wp_enqueue_style(

'motortech-style',

get_stylesheet_uri()

);

wp_enqueue_script(

'motortech-calculator',

get_template_directory_uri()

.'/assets/js/calculator.js',

array(),

null,

true

);

}

add_action(

    'wp_enqueue_scripts',

    'motortech_scripts'

);
require_once get_template_directory()

.'/inc/theme-options.php';

require_once get_template_directory()

.'/inc/custom-post-types.php';
?>