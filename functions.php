<?php
// Carrega Scripts e Estilos
require get_template_directory() . '/inc/adding-scripts-style.php';

// Post Thumbnails
require get_template_directory() . '/inc/post-thumbnails.php';

// Insere Paginação
require get_template_directory() . '/inc/insert-pagination.php';

// Insere Google Analytics no Footer
require get_template_directory() . '/inc/insert-googleanalytics.php';

// Cria a action Init e Registra Menus
require get_template_directory() . '/inc/register-menus.php';

// Registra Post Types e Taxonomias
require get_template_directory() . '/inc/register-post-types-taxonomies.php';

// Registra Sidebars
require get_template_directory() . '/inc/register-sidebar.php';

// Customiza o painel de login -> Logo, Título e url
require get_template_directory() . '/inc/customize-login.php';

// Altera o tamanho do resumo do texto
require get_template_directory() . '/inc/change-size-text.php';

// Exibe Posts Populares
require get_template_directory() . '/inc/set-post-views.php';

// Remove lixo do head
require get_template_directory() . '/inc/remove-junk-header.php';
