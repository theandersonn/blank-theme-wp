<?php
/*--------------------------------------------------------------
	CRIAÇÃO DA ACTION INIT E REGISTRO DE MENUS
--------------------------------------------------------------*/
add_action('init', 'btwp_init_menu');

function btwp_init_menu() {
	// Registra menus
	register_nav_menu('nav-principal', 'Nav principal');
	register_nav_menu('nav-mobile', 'Nav mobile');
}

/*--------------------------------------------------------------
	EXIBE OS MENUS
--------------------------------------------------------------*/
function nav_principal(){
    wp_nav_menu(
        array(
            // identificação do menu
            'theme_location'    => 'nav-principal',
            // remove container gerado pelo WP */
            'container'         => false,
            // aplica estilo desenvolvido para o menu */
            'menu_class'        => 'nav navbar-nav navbar-right',
            // caso não tenha menu para esta área, não é exibido nada */
            'fallback_cb'       => '',
            // Limita os níveis de hierarquia do menu
            'depth'             => 1
        )
    );
}

function nav_mobile(){
    wp_nav_menu(
        array(
            // identificação do menu 
            'theme_location'    => 'nav-mobile',
            // remove container gerado pelo WP
            'container'         => false,
            // aplica estilo desenvolvido para o menu
            'menu_class'        => '',  
            // caso não tenha menu para esta área, não é exibido nada
            'fallback_cb'       => '',
            // Limita os níveis de hierarquia do menu
            'depth'             => 1            
        )
    );
}
