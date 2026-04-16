<?php
/**
 * Custom template tags for this theme
 */

if ( ! function_exists( 'meridian_posted_on' ) ) :
    function meridian_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated screen-reader-text" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf(
            $time_string,
            esc_attr( get_the_date( DATE_W3C ) ),
            esc_html( get_the_date() ),
            esc_attr( get_the_modified_date( DATE_W3C ) ),
            esc_html( get_the_modified_date() )
        );

        $posted_on = sprintf(
            /* translators: %s: post date. */
            esc_html_x( 'Posted on %s', 'post date', 'meridian' ),
            '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
        );

        echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
endif;

if ( ! function_exists( 'meridian_posted_by' ) ) :
    function meridian_posted_by() {
        $byline = sprintf(
            /* translators: %s: post author. */
            esc_html_x( 'by %s', 'post author', 'meridian' ),
            '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
        );

        echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
endif;

if ( ! function_exists( 'meridian_post_thumbnail' ) ) :
    function meridian_post_thumbnail() {
        if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
            return;
        }

        if ( is_singular() ) :
            ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div><!-- .post-thumbnail -->
        <?php else : ?>
            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                <?php
                the_post_thumbnail(
                    'post-thumbnail',
                    array(
                        'alt' => the_title_attribute(
                            array(
                                'echo' => false,
                            )
                        ),
                    )
                );
                ?>
            </a>
            <?php
        endif; // End is_singular().
    }
endif;

add_action( 'meridian_social_links', 'meridian_output_social_links' );
function meridian_output_social_links() {
    $socials = array( 'github', 'linkedin', 'twitter', 'email' );
    echo '<ul class="social-nav text-center">';
    foreach ( $socials as $social ) {
        $url = get_theme_mod( "meridian_social_$social" );
        if ( $url ) {
            if ( $social === 'email' && strpos($url, 'mailto:') === false ) {
                $url = 'mailto:' . $url;
            }
            echo '<li><a href="' . esc_url( $url ) . '" target="_blank" rel="noopener noreferrer" class="social-icon ' . esc_attr( $social ) . '">' . esc_html( ucfirst( $social ) ) . '</a></li>';
        }
    }
    echo '</ul>';
}
