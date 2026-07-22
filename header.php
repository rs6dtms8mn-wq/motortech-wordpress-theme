<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="header">

<div class="container">

<div class="logo">

МОТÖРТЕХ

</div>

<nav>

<?php

wp_nav_menu(array(

    'theme_location'=>'main_menu',

    'menu_class'=>'menu'

));

?>

</nav>

</div>

</header>