<?php
/**
 * The header for our theme
 *
 * @package Quote_Calculator_Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-gray-50' ); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'quote-calculator-theme' ); ?></a>

    <header id="masthead" class="site-header bg-white shadow-md">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">

                <!-- Logo/Site Title -->
                <div class="site-branding">
                    <?php
                    if ( has_custom_logo() ) {
                        the_custom_logo();
                    } else {
                        ?>
                        <h1 class="site-title text-2xl font-bold">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-gray-900 hover:text-blue-600 transition-colors" rel="home">
                                <?php bloginfo( 'name' ); ?>
                            </a>
                        </h1>
                        <?php
                        $description = get_bloginfo( 'description', 'display' );
                        if ( $description || is_customize_preview() ) {
                            ?>
                            <p class="site-description text-gray-600 text-sm">
                                <?php echo $description; ?>
                            </p>
                            <?php
                        }
                    }
                    ?>
                </div>

                <!-- Primary Navigation -->
                <nav id="site-navigation" class="main-navigation hidden md:block">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'flex space-x-6',
                        'container'      => false,
                        'fallback_cb'    => false,
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'link_before'    => '<span class="text-gray-700 hover:text-blue-600 transition-colors font-medium">',
                        'link_after'     => '</span>',
                    ) );
                    ?>
                </nav>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-toggle" class="md:hidden text-gray-700 hover:text-blue-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <nav id="mobile-navigation" class="mobile-navigation hidden md:hidden pb-4">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'flex flex-col space-y-2',
                    'container'      => false,
                    'fallback_cb'    => false,
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'link_before'    => '<span class="block py-2 text-gray-700 hover:text-blue-600 transition-colors">',
                    'link_after'     => '</span>',
                ) );
                ?>
            </nav>
        </div>
    </header>

    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('mobile-menu-toggle');
            const mobileNav = document.getElementById('mobile-navigation');

            if (menuToggle && mobileNav) {
                menuToggle.addEventListener('click', function() {
                    mobileNav.classList.toggle('hidden');
                });
            }
        });
    </script>
