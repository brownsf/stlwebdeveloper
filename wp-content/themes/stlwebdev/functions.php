<?php
/**
 * Created by PhpStorm.
 * User: Scott
 * Date: 10/11/2014
 * Time: 9:26 PM
 */

function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

/**
 * Proper way to enqueue scripts and styles
 */
function theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

add_action( 'init', 'create_service_post_type' );
function create_service_post_type() {
    register_post_type( 'my_services',
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' )
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('page-attributes','editor','title')
        )
    );
}