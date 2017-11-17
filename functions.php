<?php

// -------------------------------------------
// CLASSES
// -------------------------------------------

// Odin Thumbnail Resizer
require get_template_directory() . '/inc/classes/odin-thumbnail-resizer.php';

// Insere WP Bootstrap Navwalker
require get_template_directory() . '/inc/classes/wp-bootstrap-navwalker.php';

// -------------------------------------------
// FUNCTIONS
// -------------------------------------------

// Habilita funcionalidades suportadas
require get_template_directory() . '/inc/functions/add-theme-suport.php';

// Limit number of characters
require get_template_directory() . '/inc/functions/change-text-size.php';

// Custom Post Thumbnail
require get_template_directory() . '/inc/functions/custom-post-thumbnail.php';

// Customiza o painel de login, Logo, Título e url
require get_template_directory() . '/inc/functions/customize-login-admin.php';

// Insere Google Analytics no Footer
require get_template_directory() . '/inc/functions/insert-googleanalytics.php';

// Insere Paginação
require get_template_directory() . '/inc/functions/insert-pagination.php';

// Carrega Scripts e Estilos
require get_template_directory() . '/inc/functions/insert-scripts-style.php';

// Insere Thumbnail em colunas do admin
require get_template_directory() . '/inc/functions/insert-thumbnail-admin-columns.php';

// Cria a action Init e Registra Menus
require get_template_directory() . '/inc/functions/register-menus.php';

// Remove lixo do head
require get_template_directory() . '/inc/functions/remove-junk-header.php';

// Desabilita funcionalidades do tema
require get_template_directory() . '/inc/functions/remove-theme-suport.php';

// Envia email notificando revisão de post
require get_template_directory() . '/inc/functions/send-mail-post-pending.php';
