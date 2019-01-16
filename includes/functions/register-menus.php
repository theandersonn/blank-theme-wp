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
            'theme_location'    => 'menu-header',
            // níveis de hierarquia do menu
            'depth'             => 2,
            // container gerado pelo WordPress
            'container'         => false,
            // id referencia javascript
            'container_id'      => '',
            // aplica estilo desenvolvido para o menu
            'menu_class'        => '',
        )
    );
}

function menu_footer(){
    wp_nav_menu(
        array(
            // identificação do menu
            'menu'              => 'Menu footer',
            'theme_location'    => 'menu-footer',
            // remove container gerado pelo WP
            'container'         => false,
            // aplica estilo desenvolvido para o menu
            'menu_class'        => '',
            // caso não tenha menu para esta área, não é exibido nada
            'fallback_cb'       => '',
            // níveis de hierarquia do menu
            'depth'             => 1
        )
    );
}
