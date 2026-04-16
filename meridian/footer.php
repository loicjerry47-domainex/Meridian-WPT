<?php
/**
 * The footer for our theme
 */
?>
    <footer id="colophon" class="site-footer">
        <div class="container footer-widgets">
            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <div class="footer-widget-area">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                <div class="footer-widget-area">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div>
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                <div class="footer-widget-area">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="site-info container">
            <div class="footer-social">
                <?php do_action( 'meridian_social_links' ); ?>
            </div>
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'meridian' ); ?></p>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
