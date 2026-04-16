<?php
/**
 * Clients Logo Bar
 */
?>
<section class="section-clients">
    <div class="container">
        <p class="clients-label text-center"><?php esc_html_e( 'Trusted by innovative companies', 'meridian' ); ?></p>
        <div class="clients-grid">
            <?php
            for ( $i = 1; $i <= 6; $i++ ) {
                $logo = get_theme_mod( "meridian_client_logo_$i" );
                if ( $logo ) {
                    echo '<div class="client-logo"><img src="' . esc_url( $logo ) . '" alt="" loading="lazy"></div>';
                } else {
                    // Placeholder circles for the demo
                    echo '<div class="client-logo placeholder"><div class="logo-shape"></div></div>';
                }
            }
            ?>
        </div>
    </div>
</section>
