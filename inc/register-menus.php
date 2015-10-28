<?php
/*--------------------------------------------------------------
	CRIAÇÃO DA ACTION INIT E REGISTRO DE MENUS
--------------------------------------------------------------*/
add_action('init', 'btwp_init_menu');
function btwp_init_menu() {
	//Registra menus
	register_nav_menu('nav-principal', 'Nav principal ( Topo )');
	register_nav_menu('nav-mobile', 'Nav mobile');
}

/*--------------------------------------------------------------
	EXIBE OS MENUS
--------------------------------------------------------------*/
function nav_principal(){
    wp_nav_menu(
        array(
            /* identificação do menu */
            'theme_location' => 'nav-principal',
            /* remove container gerado pelo WP */
            'container' => false,
            /* aplica estilo feito para o menu */
            'menu_class' => ''

        )
    );
}

function nav_mobile(){
    wp_nav_menu(
        array(
            /* identificação do menu */
            'theme_location' => 'nav-mobile',
            /* remove container gerado pelo WP */
            'container' => false,
            /* aplica estilo feito para o menu */
            'menu_class' => ''

        )
    );
}
