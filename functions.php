<?php

// Habilita funcionalidades suportadas
require get_template_directory() . '/inc/add-theme-suport.php';

// Limit number of characters
require get_template_directory() . '/inc/change-text-size.php';

// Custom Post Thumbnail
require get_template_directory() . '/inc/custom-post-thumbnail.php';

// Customiza o painel de login -> Logo, Título e url
require get_template_directory() . '/inc/customize-login-admin.php';

// Insere Google Analytics no Footer
require get_template_directory() . '/inc/insert-googleanalytics.php';

// Odin Thumbnail Resizer
require get_template_directory() . '/classes/odin-thumbnail-resizer.php';

// Insere Paginação
require get_template_directory() . '/inc/insert-pagination.php';

// Carrega Scripts e Estilos
require get_template_directory() . '/inc/insert-scripts-style.php';

// Insere Thumbnail em colunas do admin
require get_template_directory() . '/inc/insert-thumbnail-admin-columns.php';

// Insere WP Bootstrap Navwalker
require get_template_directory() . '/classes/wp-bootstrap-navwalker.php';

// Cria a action Init e Registra Menus
require get_template_directory() . '/inc/register-menus.php';

// Remove lixo do head
require get_template_directory() . '/inc/remove-junk-header.php';

// Desabilita funcionalidades do tema
require get_template_directory() . '/inc/remove-theme-suport.php';

// Envia email notificando revisão de post
require get_template_directory() . '/inc/send-mail-post-pending.php';
