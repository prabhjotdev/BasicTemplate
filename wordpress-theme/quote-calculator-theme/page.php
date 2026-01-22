<?php
/**
 * The template for displaying all pages
 *
 * @package Quote_Calculator_Theme
 */

get_header();
?>

<div class="container mx-auto px-4 py-8">

        <?php
        while ( have_posts() ) :
            the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-white rounded-lg shadow-md p-8' ); ?>>

                <!-- Page Thumbnail -->
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail mb-6">
                        <?php the_post_thumbnail( 'large', array( 'class' => 'rounded-lg w-full h-auto' ) ); ?>
                    </div>
                <?php endif; ?>

                <!-- Page Header -->
                <header class="entry-header mb-6">
                    <?php the_title( '<h1 class="entry-title text-4xl font-bold text-gray-900">', '</h1>' ); ?>
                </header>

                <!-- Page Content -->
                <div class="entry-content prose max-w-none">
                    <?php
                    the_content();

                    wp_link_pages( array(
                        'before' => '<div class="page-links mt-4 p-4 bg-gray-100 rounded">' . esc_html__( 'Pages:', 'quote-calculator-theme' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </div>

            </article>

            <?php
            // If comments are open or we have at least one comment, load up the comment template
            if ( comments_open() || get_comments_number() ) :
                ?>
                <div class="mt-8">
                    <?php comments_template(); ?>
                </div>
                <?php
            endif;

        endwhile; // End of the loop.
        ?>

    </div>

<?php
get_footer();
