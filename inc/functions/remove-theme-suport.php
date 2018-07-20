<?php
/*--------------------------------------------------------------
	REMOVE LIXO DO HEAD
--------------------------------------------------------------*/
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('template_redirect', 'rest_output_link_header', 11, 0 );
add_filter('rest_enabled', '_return_false');

/*---------------------------------------------------------------------
	disable emojis
---------------------------------------------------------------------*/
remove_action('wp_head', 'print_emoji_detection_script', 7 );
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );


/*---------------------------------------------------------------------
	disable admin bar
---------------------------------------------------------------------*/
add_filter('show_admin_bar', '__return_false');

/*---------------------------------------------------------------------
	remove recent comments wp_head css
---------------------------------------------------------------------*/
add_action( 'widgets_init', 'btwp_remove_recent_comments_style' );

function btwp_remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'  ) );
}

/*---------------------------------------------------------------------
    REMOVE THE 1600PX LIMIT FOR IMAGES INCLUDED IN 'SRCSET' ATTIBUTES
---------------------------------------------------------------------*/
add_filter( 'max_srcset_image_width', 'btwp_remove_max_srcset_image_width' );
function btwp_remove_max_srcset_image_width( $max_width ) {
    return false;
}

/*---------------------------------------------------------------------
    remove wp-embed
---------------------------------------------------------------------*/
//read more: codex.wordpress.org/Embeds
add_action( 'wp_footer', 'my_deregister_scripts' );
function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
