<?php

//	Remove a exibição da versão do WordPress no Head
remove_action( 'wp_head', 'wp_generator' );

// Remove lixo do Head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

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
require get_template_directory() . '/inc/set_post_views.php';

?>
