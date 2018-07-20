<?php

/*--------------------------------------------------------------
	CARREGANDO ESTILOS E SCRIPTS
--------------------------------------------------------------*/
add_action('wp_enqueue_scripts', 'btwp_load_scripts_style');

function btwp_load_scripts_style() {

	// version
	$version = rand(0,999);

    // Internet Explorer specific stylesheet.
    // wp_enqueue_style( 'ie8', get_stylesheet_directory_uri() . '/static/css/ie8.css', array(), '20170209' );
    // wp_style_add_data( 'ie8', 'conditional', 'lte IE 8' );

	// Internet Explorer HTML5 support
    wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/static/js/html5shiv.min.js', array(), '3.7.3', false);
    wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

    // Internet Explorer 8 media query support
    wp_enqueue_script( 'respond', get_template_directory_uri() . '/static/js/respond.min.js', array(), '1.4.2', false);
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );	

	// Carrega jQuery nativo do WordPress
    wp_dequeue_script('jquery');
    wp_enqueue_script('jquery', false, array(), false, true);
    wp_enqueue_script('jquery-core', false, array(), false, true);
    wp_enqueue_script('jquery-migrate', false, array(), false, true);

	// Carrega os estilos CSS - DESENVOLVIMENTO
	wp_enqueue_style('theme', get_stylesheet_directory_uri() . '/static/css/all.css', 1, $version);

	// Carrega os estilos CSS - FINAL
	// wp_enqueue_style('theme', get_stylesheet_directory_uri() . '/static/css/all.min.css');


	// Carrega scripts JS - DESENVOLVIMENTO
	wp_enqueue_script('app', get_stylesheet_directory_uri() . '/static/js/all.js', null, $version, true);

	// Carrega scripts JS - FINAL
	// wp_enqueue_script('app', get_stylesheet_directory_uri() . '/static/js/all.min.js', array(), null, true);

}