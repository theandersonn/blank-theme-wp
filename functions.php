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

/*--------------------------------------------------------------
	ALTERA A QUANTIDADE DE CARACTERES DO RESUMO
--------------------------------------------------------------*/
function alteraTamanhoResumo($length) {
	return 40;
}
add_filter('excerpt_length', 'alteraTamanhoResumo');

/*--------------------------------------------------------------
	CRIANDO PAGINAÇÃO
--------------------------------------------------------------*/
function wp_pagination($pages = '', $range = 9)
{
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base' => @add_query_arg('page','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'show_all' => true,
        'type' => 'plain'
    );
    if ( $wp_rewrite->using_permalinks() ) $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
    if ( !empty($wp_query->query_vars['s']) ) $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
    echo '<div class="wp_pagination">'.paginate_links( $pagination ).'</div>';
}

// Customiza o painel de login -> Logo, Título e url
require get_template_directory() . '/inc/customiza-login.php';

?>
