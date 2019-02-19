<?php
/*--------------------------------------------------------------
	CRIAÇÃO DA ACTION INIT E REGISTRO DE MENUS
--------------------------------------------------------------*/
add_action('init', 'btwp_init_menu');

function btwp_init_menu() {
    register_nav_menus(
            array(
               'menu-header' => 'Menu header',
               'menu-footer' => 'Menu footer'
    )       );
}

/*--------------------------------------------------------------
	EXIBE OS MENUS
--------------------------------------------------------------*/
function menu_header(){
    wp_nav_menu(
        array(
            // identificação do menu
            'menu'              => 'Menu header',
            // localização do menu
            'theme_location'    => 'menu-header',
            // níveis de hierarquia do menu
            'depth'             => 2,
            // container para envolver o menu
            'container'         => false,
            // id do menu
            'container_id'      => '',
            // class do menu
            'menu_class'        => ''
        )
    );
}

function menu_footer(){
    wp_nav_menu(
        array(
            // identificação do menu
            'menu'              => 'Menu footer',
            // localização do menu
            'theme_location'    => 'menu-footer',
            // níveis de hierarquia do menu
            'depth'             => 1,            
            // container para envolver o menu
            'container'         => false,
            // id do menu
            'container_id'      => '',            
            // aplica estilo desenvolvido para o menu
            'menu_class'        => ''
        )
    );
}
