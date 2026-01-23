<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Header -->
    <header class="header">
        <div class="container header-container">
            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" aria-label="FI Technologies Home">
                <svg class="logo-icon" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <rect width="40" height="40" rx="8" fill="#00A8E8"/>
                    <path d="M12 10H18V14H12V10Z" fill="white"/>
                    <path d="M22 10H28V14H22V10Z" fill="white"/>
                    <path d="M12 18H18V22H12V18Z" fill="white"/>
                    <path d="M22 18H28V22H22V18Z" fill="white"/>
                    <path d="M12 26H28V30H12V26Z" fill="white"/>
                </svg>
                <span><?php bloginfo('name'); ?></span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="nav" aria-label="Main Navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'nav-list',
                    'container' => false,
                    'fallback_cb' => 'fi_technologies_fallback_menu',
                ));
                ?>
            </nav>

            <!-- Header Actions (Desktop) -->
            <div class="header-actions">
                <button class="btn btn-sm btn-outline header-action-btn" data-action="call" data-phone="+16477999973" aria-label="Call us at +1 647-799-9973">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
                    </svg>
                    Call
                </button>
                <button class="btn btn-sm btn-outline header-action-btn" data-action="email" data-email="info@fitechnologies.ca" aria-label="Email us at info@fitechnologies.ca">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                    Email
                </button>
                <button class="btn btn-primary header-action-btn" data-action="open-quote">Get a Free Quote</button>
            </div>

            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" aria-label="Toggle mobile menu" aria-expanded="false">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <line x1="3" y1="12" x2="21" y2="12"/>
                    <line x1="3" y1="6" x2="21" y2="6"/>
                    <line x1="3" y1="18" x2="21" y2="18"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <nav class="mobile-nav" aria-label="Mobile Navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'mobile',
                'menu_class' => 'mobile-nav-list',
                'container' => false,
                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                'fallback_cb' => 'fi_technologies_fallback_menu',
            ));
            ?>
            <div class="mobile-nav-actions">
                <button class="btn btn-primary btn-block" data-action="open-quote">Get a Free Quote</button>
            </div>
        </nav>
    </header>

<?php
// Fallback menu if no menu is set
function fi_technologies_fallback_menu() {
    echo '<ul class="nav-list">';
    echo '<li><a href="' . esc_url(home_url('/')) . '" class="nav-link">Home</a></li>';
    echo '<li><a href="' . esc_url(home_url('/services')) . '" class="nav-link">Services</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about')) . '" class="nav-link">About</a></li>';
    echo '<li><a href="' . esc_url(home_url('/reviews')) . '" class="nav-link">Reviews</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact')) . '" class="nav-link">Contact</a></li>';
    echo '</ul>';
}
?>
