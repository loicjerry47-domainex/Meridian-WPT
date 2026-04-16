<?php
/**
 * Template Name: Landing Page
 * Description: A full-width page without header/footer navigation, perfect for funnels.
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'landing-page' ); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <header id="masthead" class="site-header minimal">
        <div class="container header-inner justify-center text-center">
            <div class="site-branding mx-auto">
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    echo '<h1 class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '">' . get_bloginfo( 'name' ) . '</a></h1>';
                }
                ?>
            </div>
        </div>
    </header>

    <main id="primary" class="site-main">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </main>
    
    <footer id="colophon" class="site-footer minimal text-center py-6">
        <div class="container">
            <p class="text-sm text-gray-500">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'meridian' ); ?></p>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
