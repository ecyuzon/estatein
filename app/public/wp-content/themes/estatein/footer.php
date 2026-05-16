    <!-- Footer -->
    <footer class="border-t border-gray-800 px-6 lg:px-20 py-12">
        <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-8 mb-12">
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center">
                            <i data-lucide="building-2" class="w-5 h-5"></i>
                        </div>
                        <span class="text-xl font-semibold"><?php bloginfo('name'); ?></span>
                    <?php endif; ?>
                </div>
                <?php if (get_bloginfo('description')) : ?>
                    <p class="text-sm text-gray-400"><?php bloginfo('description'); ?></p>
                <?php endif; ?>
            </div>

            <div>
                <h4 class="font-semibold mb-4">Home</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="#hero" class="hover:text-white">Hero Section</a></li>
                    <li><a href="#features" class="hover:text-white">Features</a></li>
                    <li><a href="#properties" class="hover:text-white">Properties</a></li>
                    <li><a href="#testimonials" class="hover:text-white">Testimonials</a></li>
                    <li><a href="#faq" class="hover:text-white">FAQ's</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold mb-4">About Us</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="#" class="hover:text-white">Our Story</a></li>
                    <li><a href="#" class="hover:text-white">Our Works</a></li>
                    <li><a href="#" class="hover:text-white">How It Works</a></li>
                    <li><a href="#" class="hover:text-white">Our Team</a></li>
                    <li><a href="#" class="hover:text-white">Our Clients</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold mb-4">Properties</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="<?php echo esc_url(get_post_type_archive_link('property')); ?>" class="hover:text-white">Portfolio</a></li>
                    <li><a href="#" class="hover:text-white">Categories</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold mb-4">Contact Us</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="#" class="hover:text-white">Contact Form</a></li>
                    <li><a href="#" class="hover:text-white">Our Offices</a></li>
                </ul>
            </div>
        </div>

        <div class="flex flex-col md:flex-row justify-between items-center pt-8 border-t border-gray-800 text-sm text-gray-400">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
            <p>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => false,
                    'items_wrap' => '%3$s',
                    'depth' => 1,
                ));
                ?>
            </p>
        </div>
    </footer>

</div><!-- .w-full.min-h-screen -->

<script>
    // Initialize Lucide icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // Mobile menu toggle
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuToggle && mobileMenu) {
            mobileMenuToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        }
    });
</script>

<?php wp_footer(); ?>
</body>
</html>
