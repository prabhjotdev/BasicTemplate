<?php
/**
 * The footer for our theme
 *
 * @package Quote_Calculator_Theme
 */
?>

    </main><!-- #primary -->

    <footer id="colophon" class="site-footer bg-gray-900 text-white mt-12">
        <div class="container mx-auto px-4 py-8">

            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <div class="footer-widgets mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    </div>
                </div>
            <?php endif; ?>

            <div class="site-info text-center border-t border-gray-700 pt-6">
                <p class="text-gray-400 text-sm">
                    &copy; <?php echo date( 'Y' ); ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-white transition-colors">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                    <?php esc_html_e( '. All rights reserved.', 'quote-calculator-theme' ); ?>
                </p>
                <p class="text-gray-500 text-xs mt-2">
                    <?php
                    printf(
                        esc_html__( 'Powered by %1$s | Theme: %2$s', 'quote-calculator-theme' ),
                        '<a href="https://wordpress.org/" class="hover:text-white transition-colors">WordPress</a>',
                        '<a href="#" class="hover:text-white transition-colors">Quote Calculator Theme</a>'
                    );
                    ?>
                </p>
            </div>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
