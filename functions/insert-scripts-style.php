<?php

/*--------------------------------------------------------------
	CARREGANDO ESTILOS E SCRIPTS
--------------------------------------------------------------*/
add_action('wp_enqueue_scripts', 'btwp_enqueue_scripts');

function btwp_enqueue_scripts() {

	// Carrega fontes do google
	wp_register_style('btwp-googleFonts', 'http://fonts.googleapis.com/css?family=Lato:400,300,700,900');
	wp_enqueue_style( 'btwp-googleFonts');

	// Carrega os estilos do tema
	wp_enqueue_style('all-css', get_stylesheet_directory_uri() . '/src/assets/css/all.min.css');

	// Carrega jQuery nativo do WordPress
	wp_enqueue_script('jquery');

	// Carrega scripts JS
	wp_enqueue_script('scripts-js', get_stylesheet_directory_uri() . '/src/assets/js/all.min.js');
}
