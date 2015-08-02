<?php

 //	Bloqueia a exibição da versão do WordPress
 remove_action( 'wp_head', 'wp_generator' );

 // Cria a action Init e Registra Menus
 require get_template_directory() . '/inc/register-menus.php';

 // Insere Favicon
 require get_template_directory() . '/inc/adding-favicon.php';

// Carrega Scripts e Estilos
require get_template_directory() . '/inc/adding-scripts-style.php';

// Post Thumbnails
require get_template_directory() . '/inc/post-thumbnails.php';

// Insere Paginação
require get_template_directory() . '/inc/insert-pagination.php';

// Insere Google Analytics no Footer
require get_template_directory() . '/inc/insert-googleanalytics.php';

// Regista Sidebars
require get_template_directory() . '/inc/register-sidebar.php';

// Customiza o painel de login -> Logo, Título e url
require get_template_directory() . '/inc/customize-login.php';

// Altera o tamanho do resumo do texto
require get_template_directory() . '/inc/change-size-text.php';

?>
