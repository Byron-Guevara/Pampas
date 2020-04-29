<?php

function register_pampas_menus(){

    register_nav_menus( array(
        'Header'   => __( 'Header Menu', 'Pampas' ),
        'Footer' => __( 'Footer Menu', 'Pampas' )
        ) 
    );
}
add_action('init', 'register_pampas_menus');

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), filemtime( get_stylesheet_directory() . '/css/animate.css' ), 'all');

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);
    wp_enqueue_script('generals', get_template_directory_uri().'/js/generals.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/generals.js' ), false);

    if( is_front_page() ):
        wp_enqueue_style( 'home', get_template_directory_uri() . '/css/home.css', array(), filemtime( get_stylesheet_directory() . '/css/home.css' ), 'all');
        wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.1', 'all');
        wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.1', 'all');
        wp_enqueue_script('owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'),'1.1', true);
    endif;

    if(is_page_template('page-nosotros.php')){
        wp_enqueue_style( 'nosotros', get_template_directory_uri() . '/css/nosotros.css', array(), filemtime( get_stylesheet_directory() . '/css/nosotros.css' ), 'all');
    }
    if(!is_front_page()):
        wp_enqueue_style( 'generals', get_template_directory_uri() . '/css/generals.css', array(), filemtime( get_stylesheet_directory() . '/css/generals.css' ), 'all');
    endif;

    if(is_singular() || is_page()){
        wp_enqueue_style( 'woocommerce-updates', get_template_directory_uri() . '/css/woocommerce-updates.css', array(), filemtime( get_stylesheet_directory() . '/css/woocommerce-updates.css' ), 'all');
    }

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function pampas_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'pampas_add_woocommerce_support' );



// Quitar Título del Producto
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );


// Quitar Metadatos del Producto
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

// Quitar Tabs
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['description'] );          // Remove the description tab
    unset( $tabs['reviews'] );          // Remove the reviews tab
    unset( $tabs['additional_information'] );   // Remove the additional information tab
    return $tabs;
}

// Cambiar Texto del Select de Prices
add_filter( 'woocommerce_dropdown_variation_attribute_options_args', 'cinchws_filter_dropdown_args', 10 );
function cinchws_filter_dropdown_args( $args ) {
    $args['show_option_none'] = 'CHOOSE AN OPTION';
    return $args;
}