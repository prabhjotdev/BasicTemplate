<?php
/**
 * Template Name: Quote Calculator
 * Template Post Type: page
 *
 * Full-width page template with the quote calculator
 *
 * @package Quote_Calculator_Theme
 */

get_header();
?>

<main id="primary" class="site-main bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">

        <?php
        while ( have_posts() ) :
            the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <!-- Page Header (Optional - displays if you add title/content in WP editor) -->
                <?php if ( get_the_title() || get_the_content() ) : ?>
                    <header class="entry-header text-center mb-8">
                        <?php if ( get_the_title() ) : ?>
                            <h1 class="entry-title text-4xl font-bold text-gray-900 mb-2">
                                <?php the_title(); ?>
                            </h1>
                        <?php endif; ?>

                        <?php if ( get_the_content() ) : ?>
                            <div class="entry-description text-gray-600 max-w-2xl mx-auto">
                                <?php the_content(); ?>
                            </div>
                        <?php endif; ?>
                    </header>
                <?php endif; ?>

                <!-- Quote Calculator -->
                <div class="calculator-wrapper">
                    <?php get_template_part( 'templates/calculator' ); ?>
                </div>

            </article>

        endwhile;
        ?>

    </div>
</main>

<?php
get_footer();
