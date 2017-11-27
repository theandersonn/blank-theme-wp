<?php
/*--------------------------------------------------------------
    HIDE USERNAMES FROM COMMENT CLASS
--------------------------------------------------------------*/
add_filter('comment_class', 'btwp_true_completely_remove_css_class');

function btwp_true_completely_remove_css_class( $classes ) {

    foreach( $classes as $key => $class ) {
        if(strstr( $class, "comment-author-" ) ) {
            unset( $classes[$key] );
        }
    }

    return $classes;

}

/*---------------------------------------------------------------------
    REMOVE THE 1600PX LIMIT FOR IMAGES INCLUDED IN 'SRCSET' ATTIBUTES
---------------------------------------------------------------------*/
add_filter( 'max_srcset_image_width', 'btwp_remove_max_srcset_image_width' );

function btwp_remove_max_srcset_image_width( $max_width ) {
    return false;
}

/*--------------------------------------------------------------
    STOP LOADING THE JAVASCRIPT AND CSS STYLESHEET ON ALL PAGES
--------------------------------------------------------------*/
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

/*--------------------------------------------------------------
    REMOVE VERSION CSS AND JS
--------------------------------------------------------------*/
add_filter( 'style_loader_src', 'btwp_remove_version_css_js', 9999 );
add_filter( 'script_loader_src', 'btwp_remove_version_css_js', 9999 );

function btwp_remove_version_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
