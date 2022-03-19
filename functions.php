<?php
function raio_setup(){
    /*** Titulos para SEO */
    add_theme_support('title-tag');
    /** Imagenes destacadas */
    add_theme_support('post-thumbnails');
    
    add_theme_support( 'align-wide' );
    
    /** Tamaños personalizados de imagen */
    // add_image_size( 'img_portada_home', 1920, 704, true );
    
    // Paleta de Colores
    add_theme_support('editor-color-palette', array(
        array(
            'name' => 'Amarillo',
            'slug' => 'amarillo',
            'color' => '#F5C025'
        ), 
        array(
            'name' => 'Morado',
            'slug' => 'morado',
            'color' => '#4208A8'
        ), 
        array(
            'name' => 'Blanco',
            'slug' => 'blanco',
            'color' => '#F5F5F5'
        ), 
        array(
            'name' => 'Celeste',
            'slug' => 'celeste',
            'color' => '#31BBF5'
        ), 
        array(
            'name' => 'Gris',
            'slug' => 'gris',
            'color' => '#1D1E1C'
        ), 
        array(
            'name' => 'Negro',
            'slug' => 'negro',
            'color' => '#000000'
        ), 
        array(
            'name' => 'Gris claro',
            'slug' => 'gris_claro',
            'color' => '#686868'
        ),
        array(
            'name' => 'Gris light',
            'slug' => 'gris_light',
            'color' => '#C9C9C9'
        ),
    ));

    // Deshabilita los colores personalizados
    add_theme_support('disable-custom-colors');
}
add_action('after_setup_theme', 'raio_setup');

/** Importar CSS y JS */
function raio_styles(){
    /** CSS */
    wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1');
    wp_enqueue_style('fawCSS', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css', array(), '6.1.0');
    wp_enqueue_style('owlCSS', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css', array(), '2.3.4');
    wp_enqueue_style('mainCSS', get_template_directory_uri() . '/assets/css/main.min.css', array(), '1.0.0');
    wp_enqueue_style('style', get_stylesheet_uri(), array('mainCSS'), '1.0.0' );

    /** JS */
    wp_enqueue_script('fawJS', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/js/all.min.js', array('jquery'), '6.1.0', true );
    wp_enqueue_script('owlJS', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), '2.3.4', true );
    wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'raio_styles' );

/** Menús */
function raio_menus() {
    register_nav_menus( array(
        'menu-principal' => 'Menu Principal'
    ) );
}
add_action( 'init', 'raio_menus' );

function my_customize_register( $wp_customize ){
    $wp_customize->add_panel('config_web',array(
        'title'=>'Configuraciones Raio',
        'description'=> 'Configuraciones de la Web',
        'priority'=> 50,
    ));
    require_once('functions/redes-sociales.php');
    require_once('functions/data-contact.php');
}
add_action('customize_register','my_customize_register');

function raio_custom_logo_setup() {
    $defaults = array(
        'height'               => 61,
        'width'                => 129,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'raio_custom_logo_setup' );

// SVG Support
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');