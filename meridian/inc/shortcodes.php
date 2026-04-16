<?php
/**
 * Shortcodes
 */

// Features Shortcode
function meridian_features_shortcode() {
    ob_start();
    ?>
    <div class="features-grid">
        <div class="feature-card">
            <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20v-6M6 20V10M18 20V4"/></svg></div>
            <h3 class="feature-title"><?php esc_html_e('Analytics Dashboard', 'meridian'); ?></h3>
            <p class="feature-desc"><?php esc_html_e('Get insights into your business with our top-tier analytics tools.', 'meridian'); ?></p>
        </div>
        <div class="feature-card">
            <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
            <h3 class="feature-title"><?php esc_html_e('Team Collaboration', 'meridian'); ?></h3>
            <p class="feature-desc"><?php esc_html_e('Work together seamlessly with built-in permissions and roles.', 'meridian'); ?></p>
        </div>
        <div class="feature-card">
            <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></div>
            <h3 class="feature-title"><?php esc_html_e('Enterprise Security', 'meridian'); ?></h3>
            <p class="feature-desc"><?php esc_html_e('Bank-level encryption keeping your data safe and secure.', 'meridian'); ?></p>
        </div>
        <div class="feature-card">
            <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg></div>
            <h3 class="feature-title"><?php esc_html_e('Uptime Monitoring', 'meridian'); ?></h3>
            <p class="feature-desc"><?php esc_html_e('Track your system availability 24/7 with instant alerts.', 'meridian'); ?></p>
        </div>
        <div class="feature-card">
            <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></div>
            <h3 class="feature-title"><?php esc_html_e('Automated Workflows', 'meridian'); ?></h3>
            <p class="feature-desc"><?php esc_html_e('Save time by automating repetitive tasks and processes.', 'meridian'); ?></p>
        </div>
        <div class="feature-card">
            <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></div>
            <h3 class="feature-title"><?php esc_html_e('Premium Support', 'meridian'); ?></h3>
            <p class="feature-desc"><?php esc_html_e('Get answers fast from our dedicated customer success team.', 'meridian'); ?></p>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('meridian_features', 'meridian_features_shortcode');

// Pricing Shortcode
function meridian_pricing_shortcode() {
    ob_start();
    ?>
    <div class="pricing-grid">
        <!-- Basic Plan -->
        <div class="pricing-card">
            <div class="pricing-header">
                <h3 class="plan-name">Starter</h3>
                <div class="plan-price"><span class="currency">$</span>29<span class="period">/mo</span></div>
                <p class="plan-desc">Perfect for small teams getting started.</p>
            </div>
            <div class="pricing-features">
                <ul>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M20 6L9 17l-5-5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Up to 5 users</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M20 6L9 17l-5-5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Basic analytics</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M20 6L9 17l-5-5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> 24/7 email support</li>
                    <li class="disabled">Custom integrations</li>
                    <li class="disabled">Dedicated account manager</li>
                </ul>
            </div>
            <div class="pricing-footer">
                <a href="#" class="btn btn-outline">Start Free Trial</a>
            </div>
        </div>
        
        <!-- Pro Plan -->
        <div class="pricing-card popular">
            <div class="popular-badge">Most Popular</div>
            <div class="pricing-header">
                <h3 class="plan-name">Professional</h3>
                <div class="plan-price"><span class="currency">$</span>79<span class="period">/mo</span></div>
                <p class="plan-desc">For growing businesses needing more power.</p>
            </div>
            <div class="pricing-features">
                <ul>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M20 6L9 17l-5-5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Up to 25 users</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M20 6L9 17l-5-5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Advanced analytics</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M20 6L9 17l-5-5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Priority support</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M20 6L9 17l-5-5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Custom integrations</li>
                    <li class="disabled">Dedicated account manager</li>
                </ul>
            </div>
            <div class="pricing-footer">
                <a href="#" class="btn btn-primary">Start Free Trial</a>
            </div>
        </div>
        
        <!-- Enterprise Plan -->
        <div class="pricing-card">
            <div class="pricing-header">
                <h3 class="plan-name">Enterprise</h3>
                <div class="plan-price"><span class="currency">$</span>199<span class="period">/mo</span></div>
                <p class="plan-desc">Advanced features for large scale organizations.</p>
            </div>
            <div class="pricing-features">
                <ul>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M20 6L9 17l-5-5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Unlimited users</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M20 6L9 17l-5-5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Custom reporting</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M20 6L9 17l-5-5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> 24/7 phone support</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M20 6L9 17l-5-5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Custom integrations</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M20 6L9 17l-5-5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Dedicated account manager</li>
                </ul>
            </div>
            <div class="pricing-footer">
                <a href="#" class="btn btn-outline">Contact Sales</a>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('meridian_pricing', 'meridian_pricing_shortcode');

// Testimonials Shortcode
function meridian_testimonials_shortcode($atts) {
    $atts = shortcode_atts(array(
        'count' => 3,
    ), $atts);

    $args = array(
        'post_type'      => 'meridian_testimonial',
        'posts_per_page' => intval($atts['count']),
    );
    
    $testimonials = new WP_Query($args);
    
    ob_start();
    if ($testimonials->have_posts()) :
    ?>
    <div class="testimonial-slider-container">
        <div class="testimonial-track" aria-live="polite">
            <?php while ($testimonials->have_posts()) : $testimonials->the_post(); 
                $client_name = get_post_meta(get_the_ID(), '_meridian_client_name', true);
                $client_title = get_post_meta(get_the_ID(), '_meridian_client_title', true);
                $company_name = get_post_meta(get_the_ID(), '_meridian_company_name', true);
                $rating = get_post_meta(get_the_ID(), '_meridian_rating', true);
            ?>
            <div class="testimonial-slide">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <?php 
                        for ($i = 0; $i < 5; $i++) {
                            echo $i < $rating ? '★' : '☆';
                        }
                        ?>
                    </div>
                    <div class="testimonial-content">
                        <?php the_content(); ?>
                    </div>
                    <div class="testimonial-author">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="author-avatar"><?php the_post_thumbnail('thumbnail'); ?></div>
                        <?php else: ?>
                            <div class="author-avatar-placeholder"></div>
                        <?php endif; ?>
                        <div class="author-info">
                            <h4 class="author-name"><?php echo esc_html($client_name); ?></h4>
                            <span class="author-title"><?php echo esc_html($client_title); ?><?php if($company_name) echo ' at ' . esc_html($company_name); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="testimonial-dots"></div>
    </div>
    <?php
    endif;
    wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode('meridian_testimonials', 'meridian_testimonials_shortcode');

// CTA Shortcode
function meridian_cta_shortcode($atts) {
    $atts = shortcode_atts(array(
        'title' => 'Ready to start?',
        'button_text' => 'Get Started',
        'button_url' => '#'
    ), $atts);
    
    ob_start();
    ?>
    <div class="cta-banner">
        <div class="cta-content">
            <h2 class="cta-title"><?php echo esc_html($atts['title']); ?></h2>
        </div>
        <div class="cta-action">
            <a href="<?php echo esc_url($atts['button_url']); ?>" class="btn btn-primary btn-lg"><?php echo esc_html($atts['button_text']); ?></a>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('meridian_cta', 'meridian_cta_shortcode');
