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
        <header class="header">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">

                        <!-- header hamburguer -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-header-custom" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <!-- header logo  -->
                        <h1>
                            <a class="navbar-brand" href="<?php echo site_url(); ?>" title="<?php bloginfo( 'name' ); ?>">
                                <?php bloginfo( 'name' ); ?>
                            </a>
                        </h1>
                    </div>

                    <!-- header menu html -->
                    <?php //get_template_part( 'template-parts/component', 'menu-html' ); ?>

                    <!-- header menu -->
                    <?php if (function_exists('menu_header')) { menu_header(); } ?>                    
                </div>
            </nav>
        </header> 