<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <?php wp_head(); ?>
    </head>

    <body>
        <!-- ### header ### -->
        <header class="header">
            <!-- logotype -->
            <?php if ( is_front_page() ): ?>
                <h1 class="header__logo">
                    <a href="<?php echo site_url(); ?>" title="<?php bloginfo( 'name' ); ?>">
                        <img src="<?php bloginfo( 'template_url' ); ?>/static/images/logotypes/logo-blank-theme-wp.jpg" alt="<?php bloginfo( 'name' ); ?>">
                    </a>
                </h1>
            <?php else: ?>
                <p class="header__logo">
                    <a href="<?php echo site_url(); ?>" title="<?php bloginfo( 'name' ); ?>">
                        <img src="<?php bloginfo( 'template_url' ); ?>/static/images/logotypes/logo-blank-theme-wp.jpg" alt="<?php bloginfo( 'name' ); ?>">
                    </a>
                </p>
            <?php endif; ?>
        </header>
