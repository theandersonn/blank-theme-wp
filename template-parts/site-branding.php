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