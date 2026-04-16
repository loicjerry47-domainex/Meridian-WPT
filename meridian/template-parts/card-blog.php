<?php
/**
 * Blog Card Template
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-blog' ); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="card-image">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'medium_large' ); ?>
            </a>
        </div>
    <?php endif; ?>
    
    <div class="card-content">
        <div class="card-meta">
            <span class="posted-on"><?php echo get_the_date(); ?></span>
            <span class="cat-links"><?php the_category( ', ' ); ?></span>
        </div>
        
        <h3 class="card-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        
        <div class="card-excerpt">
            <?php the_excerpt(); ?>
        </div>
        
        <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Read More', 'meridian' ); ?> &rarr;</a>
    </div>
</article>
