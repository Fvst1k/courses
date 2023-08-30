<?php
/*
Template Name: header
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content=""/>
    <meta name="keywords" content=""/>



    <title>template</title>

    <?php wp_head(); ?>
</head>
<body>
<div class="wrapper">

    <!-- Header -->
    <header class="header__courses">
        <div class="block__content block__content_header">
            <div class="header__row">
                <div class="header__logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="header__menu">
                    <?php wp_nav_menu() ?>
                </div>
            </div>
        </div>
    </header>
    <!-- /Header -->