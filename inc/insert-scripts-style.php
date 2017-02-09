<?php

/*--------------------------------------------------------------
	CARREGANDO ESTILOS E SCRIPTS
--------------------------------------------------------------*/
add_action('wp_enqueue_scripts', 'btwp_enqueue_scripts');

function btwp_enqueue_scripts() {

	// Carrega jQuery nativo do WordPress
	wp_enqueue_script('jquery');
	
	// Carrega fontes do google
	wp_register_style('btwp-googleFonts', 'http://fonts.googleapis.com/css?family=Lato:400,300,700,900');
	wp_enqueue_style( 'btwp-googleFonts');


	// Carrega os estilos CSS - DESENVOLVIMENTO
	wp_enqueue_style('all-css', get_stylesheet_directory_uri() . '/assets/css/all.css');
	
	// Carrega os estilos CSS - FINAL
	//wp_enqueue_style('all-css', get_stylesheet_directory_uri() . '/assets/css/all.min.css');


	// Carrega scripts JS - DESENVOLVIMENTO
	wp_enqueue_script('all-js', get_stylesheet_directory_uri() . '/assets/js/all.js', array(), null, true);
	
	// Carrega scripts JS - FINAL
	//wp_enqueue_script('scripts-js', get_stylesheet_directory_uri() . '/assets/js/all.min.js', array(), null, true);

    // Internet Explorer specific stylesheet.
    // wp_enqueue_style( 'btwp-ie8', get_stylesheet_directory_uri() . '/assets/css/ie8.css', array(), '20170209' );
    // wp_style_add_data( 'btwp-ie8', 'conditional', 'lte IE 8' );	

	// Internet Explorer HTML5 support 
    wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/assets/js/helpers/html5shiv.js', array(), '3.7.3', false);
    wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

    // Internet Explorer 8 media query support
    wp_enqueue_script( 'respond', get_template_directory_uri() . '/assets/js/helpers/respond.js', array(), '1.4.2', false);
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );   	
}