<!DOCTYPE html>
<html <?php language_attributes(); ?>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <?php wp_head(); ?>
    </head>
<body>

	<!-- TOPO SITE -->
	<header>
        <div class="wrap">
            <h1>
                <a href="<?php echo site_url(); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
            </h1>
            
            <!-- CHAMADA DO MENU PRINCIPAL -->
            <?php //nav_principal(); ?>

            <!-- CHAMADA DO MENU MOBILE -->
            <?php //nav_mobile(); ?>
        </div>
	</header>
