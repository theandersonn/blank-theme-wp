<?php

    // prevent file from being loaded directly
    if ( ! defined( 'ABSPATH' ) ) {
        die( '-1' );
    }

    $btwp_template_directory = get_template_directory();

    // -------------------------------------------
    // classes
    // -------------------------------------------
    require $btwp_template_directory . '/_inc/classes/class-odin-thumbnail-resizer.php';
    require $btwp_template_directory . '/_inc/classes/class-wp-bootstrap-navwalker.php';

    // -------------------------------------------
    // functions
    // -------------------------------------------
    require $btwp_template_directory . '/_inc/functions/add-comments-disqus.php';
    require $btwp_template_directory . '/_inc/functions/add-googleanalytics.php';
    require $btwp_template_directory . '/_inc/functions/add-pagination.php';
    require $btwp_template_directory . '/_inc/functions/add-scripts-style.php';
    require $btwp_template_directory . '/_inc/functions/add-thumbnail-admin-columns.php';
    require $btwp_template_directory . '/_inc/functions/add-theme-suport.php';
    require $btwp_template_directory . '/_inc/functions/change-text-size.php';
    require $btwp_template_directory . '/_inc/functions/custom-post-thumbnail.php';
    require $btwp_template_directory . '/_inc/functions/customize-login-admin.php';
    require $btwp_template_directory . '/_inc/functions/register-menus.php';
    require $btwp_template_directory . '/_inc/functions/remove-theme-suport.php';
    require $btwp_template_directory . '/_inc/functions/send-mail-post-pending.php';
