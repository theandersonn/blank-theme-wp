<?php

/*--------------------------------------------------------------
	CARREGANDO ESTILOS E SCRIPTS
--------------------------------------------------------------*/
add_action('wp_enqueue_scripts', 'btwp_enqueue_scripts');

function btwp_enqueue_scripts() {

	// Carrega fontes do google
	wp_register_style('btwp-googleFonts', 'http://fonts.googleapis.com/css?family=Lato:400,300,700,900');
	wp_enqueue_style( 'btwp-googleFonts');

	// Carrega estilos helpers
	//wp_enqueue_style('reset-css', get_stylesheet_directory_uri() . '/assets/css/reset.css');
	//wp_enqueue_style('grid-css', get_stylesheet_directory_uri() . '/assets/css/grid.css');

	// Carrega os estilos do Owl Carousel
	//wp_enqueue_style('owl-carousel-css', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css');
	//wp_enqueue_style('owl-theme-css', get_stylesheet_directory_uri() . '/assets/css/owl.theme.default.min.css');

	// Carrega os estilos do tema
	wp_enqueue_style('all-css', get_stylesheet_directory_uri() . '/assets/public/css/all.min.css');
	//wp_enqueue_style('site-css', get_stylesheet_directory_uri() . '/assets/css/site.css');
	//wp_enqueue_style('media-queries-css', get_stylesheet_directory_uri() . '/assets/css/media-queries.css');

	//Carrega estilo da Função Responsive YouTube
	wp_register_script('responsive-video-js', get_template_directory_uri() . '/responsive-video.js');

	// Carrega jQuery nativo do WordPress
	wp_enqueue_script('jquery');

	// Carrega scripts JS
	wp_enqueue_script('scripts-js', get_stylesheet_directory_uri() . '/assets/public/js/functions.min.js');
	wp_enqueue_script('owl-carousel-js', get_stylesheet_directory_uri() . '/assets/public/js/owl.carousel.min.js');
}
