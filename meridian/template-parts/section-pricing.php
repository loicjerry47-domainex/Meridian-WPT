<?php
/**
 * Pricing Section
 */
?>
<section class="section-pricing" id="pricing">
    <div class="container">
        <div class="section-header text-center">
            <h2><?php esc_html_e( 'Simple, transparent pricing', 'meridian' ); ?></h2>
            <p><?php esc_html_e( 'No hidden fees. No surprise charges.', 'meridian' ); ?></p>
        </div>
        <?php echo do_shortcode( '[meridian_pricing]' ); ?>
    </div>
</section>
