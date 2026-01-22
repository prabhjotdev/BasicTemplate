<?php
/**
 * The main template file
 *
 * @package Quote_Calculator_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container mx-auto px-4 py-8">

        <?php
        if ( have_posts() ) :

            if ( is_home() && ! is_front_page() ) :
                ?>
                <header class="page-header mb-8">
                    <h1 class="page-title text-4xl font-bold text-gray-900">
                        <?php single_post_title(); ?>
                    </h1>
                </header>
                <?php
            endif;

            // Start the Loop
            while ( have_posts() ) :
                the_post();
                ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-12 bg-white rounded-lg shadow-md p-6' ); ?>>

                    <!-- Post Thumbnail -->
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail mb-4">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'large', array( 'class' => 'rounded-lg w-full h-auto' ) ); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <!-- Post Header -->
                    <header class="entry-header mb-4">
                        <?php
                        if ( is_singular() ) :
                            the_title( '<h1 class="entry-title text-3xl font-bold text-gray-900 mb-2">', '</h1>' );
                        else :
                            the_title( '<h2 class="entry-title text-2xl font-bold mb-2"><a href="' . esc_url( get_permalink() ) . '" class="text-gray-900 hover:text-blue-600 transition-colors">', '</a></h2>' );
                        endif;
                        ?>

                        <?php if ( 'post' === get_post_type() ) : ?>
                            <div class="entry-meta text-sm text-gray-600">
                                <span class="posted-on">
                                    <?php echo get_the_date(); ?>
                                </span>
                                <span class="byline mx-2">|</span>
                                <span class="author">
                                    <?php the_author_posts_link(); ?>
                                </span>
                            </div>
                        <?php endif; ?>
                    </header>

                    <!-- Post Content -->
                    <div class="entry-content prose max-w-none">
                        <?php
                        if ( is_singular() ) :
                            the_content();

                            wp_link_pages( array(
                                'before' => '<div class="page-links mt-4">' . esc_html__( 'Pages:', 'quote-calculator-theme' ),
                                'after'  => '</div>',
                            ) );
                        else :
                            the_excerpt();
                            ?>
                            <a href="<?php the_permalink(); ?>" class="inline-block mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition-colors">
                                <?php esc_html_e( 'Read More', 'quote-calculator-theme' ); ?>
                            </a>
                            <?php
                        endif;
                        ?>
                    </div>

                    <!-- Post Footer -->
                    <?php if ( is_singular() && 'post' === get_post_type() ) : ?>
                        <footer class="entry-footer mt-6 pt-4 border-t border-gray-200">
                            <div class="entry-meta text-sm text-gray-600">
                                <?php
                                $categories_list = get_the_category_list( ', ' );
                                if ( $categories_list ) {
                                    printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'quote-calculator-theme' ) . '</span>', $categories_list );
                                }

                                $tags_list = get_the_tag_list( '', ', ' );
                                if ( $tags_list ) {
                                    echo '<span class="tags-links mx-4">|</span>';
                                    printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'quote-calculator-theme' ) . '</span>', $tags_list );
                                }
                                ?>
                            </div>
                        </footer>
                    <?php endif; ?>

                </article>

                <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( is_singular() && ( comments_open() || get_comments_number() ) ) :
                    comments_template();
                endif;

            endwhile;

            // Pagination
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( '&laquo; Previous', 'quote-calculator-theme' ),
                'next_text' => __( 'Next &raquo;', 'quote-calculator-theme' ),
                'class'     => 'mt-8',
            ) );

        else :
            ?>
            <div class="no-results bg-white rounded-lg shadow-md p-8 text-center">
                <h1 class="page-title text-3xl font-bold text-gray-900 mb-4">
                    <?php esc_html_e( 'Nothing Found', 'quote-calculator-theme' ); ?>
                </h1>
                <p class="text-gray-600">
                    <?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'quote-calculator-theme' ); ?>
                </p>
                <div class="mt-6">
                    <?php get_search_form(); ?>
                </div>
            </div>
            <?php
        endif;
        ?>

    </div>
</main>

<?php
get_footer();
