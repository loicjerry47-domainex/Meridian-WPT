<?php
/**
 * SaaS Hero Section
 */
$title = get_theme_mod( 'meridian_hero_title', 'Scale your business with Meridian' );
$subtitle = get_theme_mod( 'meridian_hero_subtitle', 'The all-in-one platform for modern teams to collaborate, ship faster, and grow revenue.' );
$btn1_text = get_theme_mod( 'meridian_hero_btn1_text', 'Get Started Free' );
$btn1_url = get_theme_mod( 'meridian_hero_btn1_url', '#' );
$btn2_text = get_theme_mod( 'meridian_hero_btn2_text', 'Book a Demo' );
$btn2_url = get_theme_mod( 'meridian_hero_btn2_url', '#' );
?>
<section class="hero-saas">
    <div class="container hero-container">
        <div class="hero-content">
            <h1 class="hero-title"><?php echo esc_html( $title ); ?></h1>
            <p class="hero-subtitle"><?php echo esc_html( $subtitle ); ?></p>
            <div class="hero-actions">
                <?php if ( $btn1_text ) : ?>
                    <a href="<?php echo esc_url( $btn1_url ); ?>" class="btn btn-primary"><?php echo esc_html( $btn1_text ); ?></a>
                <?php endif; ?>
                <?php if ( $btn2_text ) : ?>
                    <a href="<?php echo esc_url( $btn2_url ); ?>" class="btn btn-outline"><?php echo esc_html( $btn2_text ); ?></a>
                <?php endif; ?>
            </div>
            <div class="hero-trust">
                <span class="trust-stars">★★★★★</span>
                <span class="trust-text"><?php esc_html_e( 'Trusted by 10,000+ teams', 'meridian' ); ?></span>
            </div>
        </div>
        <div class="hero-visual">
            <div class="mockup-window">
                <div class="mockup-header">
                    <span class="dot red"></span>
                    <span class="dot yellow"></span>
                    <span class="dot green"></span>
                </div>
                <div class="mockup-body">
                    <div class="mockup-sidebar"></div>
                    <div class="mockup-content">
                        <div class="mockup-card line-1"></div>
                        <div class="mockup-card line-2"></div>
                        <div class="mockup-card line-3"></div>
                        <div class="mockup-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
