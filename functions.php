<?php

    // prevent file from being loaded directly
    if ( ! defined( 'ABSPATH' ) ) {
        die( '-1' );
    }

    $btwp_dir_ajax      = get_template_directory() . '/inc/ajax';
    $btwp_dir_class     = get_template_directory() . '/inc/classes';
    $btwp_dir_function  = get_template_directory() . '/inc/functions'; 

    // -------------------------------------------
    // ajax
    // -------------------------------------------
    require $btwp_dir_ajax . '/example-ajax.php';

    // -------------------------------------------
    // classes
    // -------------------------------------------
    require $btwp_dir_class . '/class-odin-thumbnail-resizer.php';
    require $btwp_dir_class . '/class-wp-bootstrap-navwalker.php';

    // -------------------------------------------
    // functions
    // -------------------------------------------
    require $btwp_dir_function . '/add-comments-disqus.php';
    require $btwp_dir_function . '/add-google-analytics.php';
    require $btwp_dir_function . '/add-pagination.php';
    require $btwp_dir_function . '/add-thumbnail-admin-columns.php';
    require $btwp_dir_function . '/add-theme-suport.php';
    
    require $btwp_dir_function . '/custom-post-thumbnail.php';
    require $btwp_dir_function . '/custom-login-admin.php';
    
    require $btwp_dir_function . '/limit-description-size.php'; 
    require $btwp_dir_function . '/load-scripts-style.php';       
    
    require $btwp_dir_function . '/register-menus.php';
    require $btwp_dir_function . '/remove-theme-suport.php';
    
    require $btwp_dir_function . '/send-mail-post-pending.php';
