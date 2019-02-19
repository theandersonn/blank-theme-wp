<?php

    // Prevent file from being loaded directly
    if ( ! defined( 'ABSPATH' ) ) {
        die( '-1' );
    }

    // -------------------------------------------
    // Classes
    // -------------------------------------------
    get_template_directory() . '/includes/classes/class-odin-thumbnail-resizer.php';

    // -------------------------------------------
    // Functions
    // -------------------------------------------
    require get_template_directory() . '/includes/functions/add-google-analytics.php';
    require get_template_directory() . '/includes/functions/add-pagination.php';
    require get_template_directory() . '/includes/functions/add-thumbnail-admin-columns.php';
    require get_template_directory() . '/includes/functions/add-theme-suport.php';

    require get_template_directory() . '/includes/functions/custom-post-thumbnail.php';
    require get_template_directory() . '/includes/functions/custom-login-admin.php';

    require get_template_directory() . '/includes/functions/load-scripts-style.php';

    require get_template_directory() . '/includes/functions/register-menus.php';
    require get_template_directory() . '/includes/functions/remove-theme-suport.php';
