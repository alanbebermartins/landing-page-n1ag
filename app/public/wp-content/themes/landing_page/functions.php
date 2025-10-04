<?php
// Ativar suporte a logo personalizada
function meu_tema_suporte() {
    add_theme_support( 'custom-logo', array(
        'height'      => 100,   // altura máxima
        'width'       => 300,   // largura máxima
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Ativar suporte a título dinâmico do site
    add_theme_support( 'title-tag' );

    // Ativar suporte a imagens destacadas (se precisar)
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'meu_tema_suporte' );

// Registrar menus
function meu_tema_menus() {
    register_nav_menus( array(
        'main_menu' => __( 'Menu Principal', 'meu-tema' ),
    ) );
}
add_action( 'init', 'meu_tema_menus' );

// Carregar estilos do tema
function meu_tema_enqueue_scripts() {
    // Carrega o style.css da raiz do tema
    wp_enqueue_style(
        'meu-tema-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Exemplo: se você tiver um CSS adicional em /assets/css/custom.css
    /*
    wp_enqueue_style(
        'meu-tema-custom',
        get_template_directory_uri() . '/assets/css/custom.css',
        array('meu-tema-style'),
        wp_get_theme()->get('Version')
    );
    */
}
add_action( 'wp_enqueue_scripts', 'meu_tema_enqueue_scripts' );
