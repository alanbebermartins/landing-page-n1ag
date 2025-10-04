<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
    <div class="container">
        <div class="header__logo">
            <?php 
                if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                } else {
                    // fallback se não tiver logo definida
                    echo '<a href="' . esc_url( home_url( '/' ) ) . '">' . get_bloginfo( 'name' ) . '</a>';
                }
            ?>
        </div>

        <nav class="header__main-nav">
            <?php 
                wp_nav_menu( array(
                    'theme_location' => 'main_menu',
                    'container'      => false,
                    'menu_class'     => 'menu',
                ) );
            ?>
        </nav>
        <button class="header__btn-talk-to-us">Fale Conosco</button>
    </div>
</header>
