<?php
/**
 * Features Section
 */
?>
<section class="section-features">
    <div class="container">
        <div class="section-header text-center">
            <h2><?php esc_html_e( 'Everything you need to succeed', 'meridian' ); ?></h2>
            <p><?php esc_html_e( 'Powerful features designed specifically for modern teams.', 'meridian' ); ?></p>
        </div>
        <?php echo do_shortcode( '[meridian_features]' ); ?>
    </div>
</section>
