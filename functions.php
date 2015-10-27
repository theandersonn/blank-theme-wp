<?php

// Ativa modo manutenção
//require get_template_directory() . '/inc/active-maintenace-mode.php';

// Altera o tamanho do resumo do texto
require get_template_directory() . '/inc/change-size-text.php';

// Customiza o painel de login -> Logo, Título e url
require get_template_directory() . '/inc/customize-login-admin.php';

// Insere Google Analytics no Footer
require get_template_directory() . '/inc/insert-googleanalytics.php';

// Insere Comentários
require get_template_directory() . '/inc/insert-mytheme-comment.php';

// Insere Paginação
require get_template_directory() . '/inc/insert-pagination.php';

// Carrega Scripts e Estilos
require get_template_directory() . '/inc/insert-scripts-style.php';

// Insere Thumbnail em colunas do admin
require get_template_directory() . '/inc/insert-thumbnail-admin-columns.php';

// Cria a action Init e Registra Menus
require get_template_directory() . '/inc/register-menus.php';

// Registra Post Types e Taxonomias
require get_template_directory() . '/inc/register-post-types-taxonomies.php';

// Registra Sidebars
require get_template_directory() . '/inc/register-sidebar.php';

// Remove lixo do head
require get_template_directory() . '/inc/remove-junk-header.php';

// Post Thumbnails
require get_template_directory() . '/inc/set-post-thumbnails.php';

// Exibe Posts Populares
require get_template_directory() . '/inc/set-post-views.php';
