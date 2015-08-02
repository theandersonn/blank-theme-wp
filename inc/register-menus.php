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

?>
