<?php
/*--------------------------------------------------------------
	CRIAÇÃO DA ACTION INIT E REGISTRO DE MENUS
--------------------------------------------------------------*/
add_action('init', 'btwp_init_menu');
function btwp_init_menu() {
	//Registra menus
	register_nav_menu('menu-primario', 'Menu Principal ( Topo )');
	register_nav_menu('menu-mobile', 'Menu mobile');
}

/*--------------------------------------------------------------
	EXIBE OS MENUS
--------------------------------------------------------------*/
function menu_principal(){
    wp_nav_menu(
        array(
            /* identificação do menu */
            'theme_location' => 'menu-primario',
            /* remove container gerado pelo WP */
            'container' => false,
            /* aplica estilo feito para o menu */
            'menu_class' => ''

        )
    );
}

function menu_principal_mobile(){
    wp_nav_menu(
        array(
            /* identificação do menu */
            'theme_location' => 'menu-primario-mobile',
            /* remove container gerado pelo WP */
            'container' => false,
            /* aplica estilo feito para o menu */
            'menu_class' => ''

        )
    );
}
