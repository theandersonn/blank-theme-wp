<?php

/*--------------------------------------------------------------
	CARREGANDO ESTILOS E SCRIPTS
--------------------------------------------------------------*/
add_action('wp_enqueue_scripts', 'btwp_enqueue_scripts');

function btwp_enqueue_scripts() {

	// Carrega fontes do google
	wp_register_style('btwp-googleFonts', 'http://fonts.googleapis.com/css?family=Lato:400,300,700,900');
	wp_enqueue_style( 'btwp-googleFonts');

	// Carrega jQuery nativo do WordPress
	wp_enqueue_script('jquery');

	// Carrega os estilos CSS - DESENVOLVIMENTO
	wp_enqueue_style('all-css', get_stylesheet_directory_uri() . '/assets/css/all.css');
	
	// Carrega os estilos CSS - FINAL
	//wp_enqueue_style('all-css', get_stylesheet_directory_uri() . '/assets/css/all.min.css');


	// Carrega scripts JS - DESENVOLVIMENTO
	wp_enqueue_script('all-js', get_stylesheet_directory_uri() . '/assets/js/all.js', array(), null, true);
	
	// Carrega scripts JS - FINAL
	//wp_enqueue_script('scripts-js', get_stylesheet_directory_uri() . '/assets/js/all.min.js', array(), null, true);
}