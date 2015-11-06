<?php

// Ativa modo manutenção
// require get_template_directory() . '/inc/active-maintenace-mode.php';

// Altera o tamanho do resumo do texto
require get_template_directory() . '/functions/change-size-text.php';

// Customiza o painel de login -> Logo, Título e url
require get_template_directory() . '/functions/customize-login-admin.php';

// Insere Google Analytics no Footer
require get_template_directory() . '/functions/insert-googleanalytics.php';

// Insere Comentários
require get_template_directory() . '/functions/insert-mytheme-comment.php';

// Insere Paginação
require get_template_directory() . '/functions/insert-pagination.php';

// Carrega Scripts e Estilos
require get_template_directory() . '/functions/insert-scripts-style.php';

// Insere Thumbnail em colunas do admin
require get_template_directory() . '/functions/insert-thumbnail-admin-columns.php';

// Cria a action Init e Registra Menus
require get_template_directory() . '/functions/register-menus.php';

// Registra Post Types e Taxonomias
require get_template_directory() . '/functions/register-post-types-taxonomies.php';

// Registra Sidebars
require get_template_directory() . '/functions/register-sidebar.php';

// Remove lixo do head
require get_template_directory() . '/functions/remove-junk-header.php';

// Post Thumbnails
require get_template_directory() . '/functions/set-post-thumbnails.php';
