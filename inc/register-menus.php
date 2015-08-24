<?php

/*--------------------------------------------------------------
	CRIAÇÃO DA ACTION INIT E REGISTRO DE MENUS
--------------------------------------------------------------*/
add_action('init', 'btwp_init');
function btwp_init() {
	//Registra menus
	btwp_register_menus();
	//Registra Post Types (EXEMPLO)
	btwp_register_post_types_portifolio();
	//Registra Taxonomias
	btwp_register_taxonomies();
}

function btwp_register_menus() {
	register_nav_menu('menu-primario', 'Menu Principal ( Topo )');
}

?>
