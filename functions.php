<?php

    // prevent file from being loaded directly
    if ( ! defined( 'ABSPATH' ) ) {
        die( '-1' );
    }

    $btwp_template_directory = get_template_directory();

    // -------------------------------------------
    // classes
    // -------------------------------------------
    require $btwp_template_directory . '/includes/classes/class-odin-thumbnail-resizer.php';
    require $btwp_template_directory . '/includes/classes/class-wp-bootstrap-navwalker.php';

    // -------------------------------------------
    // functions
    // -------------------------------------------
    require $btwp_template_directory . '/includes/functions/add-comments-disqus.php';
    require $btwp_template_directory . '/includes/functions/add-googleanalytics.php';
    require $btwp_template_directory . '/includes/functions/add-pagination.php';
    require $btwp_template_directory . '/includes/functions/add-scripts-style.php';
    require $btwp_template_directory . '/includes/functions/add-thumbnail-admin-columns.php';
    require $btwp_template_directory . '/includes/functions/add-theme-suport.php';
    require $btwp_template_directory . '/includes/functions/change-text-size.php';
    require $btwp_template_directory . '/includes/functions/custom-post-thumbnail.php';
    require $btwp_template_directory . '/includes/functions/customize-login-admin.php';
    require $btwp_template_directory . '/includes/functions/register-menus.php';
    require $btwp_template_directory . '/includes/functions/remove-junk-header.php';
    require $btwp_template_directory . '/includes/functions/remove-theme-suport.php';
    require $btwp_template_directory . '/includes/functions/send-mail-post-pending.php';
