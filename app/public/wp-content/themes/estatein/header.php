<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Manrope:wght@200..800&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-background text-white'); ?>>
<?php wp_body_open(); ?>

<div class="w-full min-h-screen">
    <!-- Header -->
    <header class="border-b border-gray-800 px-6 lg:px-20 pb-4">
        <!-- Top Bar -->
        <div id="top-banner" class="relative flex items-center justify-center text-sm mb-4 top-banner -mx-6 lg:-mx-20 px-6 lg:px-20 py-2 lg:py-6 bg-gray-900/50">
            <div class="w-full text-center">
                
                <p>
                    <i class="fa-solid fa-star mr-2 text-gray-300" aria-hidden="true"></i>
                    Discover Your Dream Property with EstateIn. <u><a href="#">Learn more</a></u>
                </p>
            </div
            <button id="top-banner-close" type="button" class="absolute right-6 lg:right-20 inline-flex items-center justify-center rounded-md p-1 text-gray-400 hover:text-white hover:bg-gray-800 transition-colors" aria-label="Close top banner">
                <i data-lucide="x" class="w-4 h-4"></i>
            </button>
        </div>
        <!-- Logo and Navigation -->
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center">
                        <i data-lucide="building-2" class="w-5 h-5"></i>
                    </div>
                    <span class="text-xl font-semibold"><?php bloginfo('name'); ?></span>
                <?php endif; ?>
            </div>

            <nav class="hidden md:block">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'flex items-center gap-8 text-sm',
                    'fallback_cb' => 'wp_page_menu',
                    'depth' => 1,
                ));
                ?>
            </nav>

            <a href="contact-us" class="hidden md:block px-4 py-2 text-sm border border-gray-700 rounded-lg hover:bg-gray-800 transition-colors">
                Contact Us
                </a>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-toggle" class="md:hidden p-2">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
            <nav class="flex flex-col gap-4">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'flex flex-col gap-4 text-sm',
                    'fallback_cb' => 'wp_page_menu',
                ));
                ?>
            </nav>
        </div>
    </header>
