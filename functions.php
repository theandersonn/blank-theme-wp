<?php
/**
 * Funções e definições.
 *
 * @package Blank Theme WP
 */ 

// Carregando scripts e estilos 
add_action('wp_enqueue_scripts', 'btwp_enqueue_scripts');

function btwp_enqueue_scripts() {
	// Carrega os estilos do tema
	wp_enqueue_style('site-css', get_stylesheet_directory_uri() . '/assets/css/site.css');
	wp_enqueue_script( 'scripts-js', get_stylesheet_directory_uri() . '/assets/js/scripts.js');
	// Carrega jQuery nativo do WordPress
	wp_enqueue_script('jquery');
}

?>