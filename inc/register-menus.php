<?php

/*--------------------------------------------------------------
	CRIAÇÃO DA ACTION INIT E REGISTRO DE MENUS
--------------------------------------------------------------*/
add_action('init', 'btwp_init');
function btwp_init() {
	//Registra Post Types (SLIDER)
	btwp_register_post_types_slider();
	//Registra Taxonomias
	btwp_register_taxonomies();
}

/*--------------------------------------------------------------
	REGISTRO DE MENUS
--------------------------------------------------------------*/
function nav_principal(){
	wp_nav_menu(
	    array(
	        /* identificação do menu */
	        'theme-location' => 'menu-primario',
	        /* remove container gerado pelo WP */
	        'container' => '',
	        /* aplica estilo feito para o menu */
	        'menu_class' => ''
	    )
	);
}

register_nav_menu('menu-primario', 'Menu Principal ( Topo )');
