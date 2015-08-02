<?php
/*--------------------------------------------------------------
	CRIAÇÃO DA ACTION INIT E REGISTRO DE MENUS
--------------------------------------------------------------*/
add_action('init', 'btwp_init');
function btwp_init() {
	btwp_register_menus();
}

function btwp_register_menus() {
	register_nav_menu('menu-primario', 'Menu Principal ( Topo )');
}

/*--------------------------------------------------------------
	INSERE FAVICON
--------------------------------------------------------------*/
function site_favicon() {
echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_stylesheet_directory_uri().'/assets/images/favicon.ico" />';
}
add_action('wp_head', 'site_favicon');

/*--------------------------------------------------------------
	Bloqueia a exibição da versão do WordPress
 --------------------------------------------------------------*/
 remove_action( 'wp_head', 'wp_generator' );


/*--------------------------------------------------------------
	CARREGANDO ESTILOS E SCRIPTS
--------------------------------------------------------------*/
add_action('wp_enqueue_scripts', 'btwp_enqueue_scripts');

function btwp_enqueue_scripts() {

	// Carrega os estilos do tema
	wp_enqueue_style('site-css', get_stylesheet_directory_uri() . '/assets/css/site.css');
	wp_enqueue_style('grid-css', get_stylesheet_directory_uri() . '/assets/css/grid.css');
	wp_enqueue_style('reset-css', get_stylesheet_directory_uri() . '/assets/css/reset.css');
	wp_enqueue_style('media-queries-css', get_stylesheet_directory_uri() . '/assets/css/media-queries.css');

	// Carrega os estilos do Owl Carousel
	wp_enqueue_style('owl-carousel-css', get_stylesheet_directory_uri() . '/assets/css/owl-carousel/owl.carousel.css');
	wp_enqueue_style('owl-theme-css', get_stylesheet_directory_uri() . '/assets/css/owl-carousel/owl.theme.css');

	// Carrega jQuery nativo do WordPress
	wp_enqueue_script('jquery');

	// Carrega os scripts do Owl Carousel
	wp_enqueue_script('owl-carousel-js', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js');
	wp_enqueue_script('scripts-js', get_stylesheet_directory_uri() . '/assets/js/functions.js');
}

/*--------------------------------------------------------------
	HABILITANDO IMAGENS DESTACADAS
--------------------------------------------------------------*/
add_theme_support('post-thumbnails');
add_image_size('large', 700, '', true); // Large Thumbnail
add_image_size('medium', 250, '', true); // Medium Thumbnail
add_image_size('small', 120, '', true); // Small Thumbnail
add_image_size('custom-size', 700, '', true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

// Insere Paginação
require get_template_directory() . '/inc/insert-pagination.php';

// Insere Google Analytics no Footer
require get_template_directory() . '/inc/insert-googleanalytics.php';

// Regista Sidebars
require get_template_directory() . '/inc/register-sidebar.php';

// Customiza o painel de login -> Logo, Título e url
require get_template_directory() . '/inc/customize-login.php';

// Altera o tamanho do resumo do texto
require get_template_directory() . '/inc/change-size-text.php';

?>
