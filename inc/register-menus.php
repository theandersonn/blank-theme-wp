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
            'container'         => 'div',
            // bootstrap menu collapse 
            'container_class'   => 'collapse navbar-collapse',
            // id referencia bootstrap javascript  
            'container_id'      => 'menu-header-custom',
            // aplica estilo desenvolvido para o menu
            'menu_class'        => 'nav navbar-nav navbar-right',
            // fallback caso não exista nenhum menu
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            // instância da classe wp_bootstrap_navwalker
            'walker'            => new wp_bootstrap_navwalker())
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
            // Limita os níveis de hierarquia do menu
            'depth'             => 1            
        )
    );
}
