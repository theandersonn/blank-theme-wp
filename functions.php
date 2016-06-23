<?php

// Habilita funcionalidades suportadas
require get_template_directory() . '/inc/add-theme-suport.php';

// Altera o tamanho do resumo do texto
require get_template_directory() . '/inc/change-size-text.php';

// Customiza o painel de login -> Logo, Título e url
require get_template_directory() . '/inc/customize-login-admin.php';

// Insere Google Analytics no Footer
require get_template_directory() . '/inc/insert-googleanalytics.php';

// Insere Paginação
require get_template_directory() . '/inc/insert-pagination.php';

// Carrega Scripts e Estilos
require get_template_directory() . '/inc/insert-scripts-style.php';

// Insere Thumbnail em colunas do admin
require get_template_directory() . '/inc/insert-thumbnail-admin-columns.php';

// Registra Post Type Portfolio (exemplo - deve ser modificado)
require get_template_directory() . '/inc/register-cpt-portfolio.php';

// Cria a action Init e Registra Menus
require get_template_directory() . '/inc/register-menus.php';

// Registra Sidebars
require get_template_directory() . '/inc/register-sidebar.php';

// Remove lixo do head
require get_template_directory() . '/inc/remove-junk-header.php';

// Desabilita funcionalidades do tema
require get_template_directory() . '/inc/remove-theme-suport.php';