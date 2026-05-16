<?php get_header(); ?>

<section class="px-6 lg:px-20 py-16 lg:py-24">
    <div class="max-w-4xl mx-auto text-center">
        <div class="mb-8">
            <i data-lucide="home" class="w-24 h-24 mx-auto text-purple-600 mb-6"></i>
        </div>

        <h1 class="text-6xl lg:text-8xl font-bold mb-4">404</h1>
        <h2 class="text-3xl lg:text-4xl font-bold mb-6">Page Not Found</h2>

        <p class="text-gray-400 text-lg mb-12 max-w-2xl mx-auto">
            Sorry, the page you're looking for doesn't exist. It might have been moved or deleted.
            Let's get you back on track to finding your dream property.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="px-8 py-4 bg-primary rounded-lg hover:bg-purple-700 transition-colors">
                Go to Homepage
            </a>
            <a href="<?php echo esc_url(get_post_type_archive_link('property')); ?>" class="px-8 py-4 border border-gray-700 rounded-lg hover:bg-gray-800 transition-colors">
                Browse Properties
            </a>
        </div>

        <!-- Search Form -->
        <div class="mt-16 max-w-2xl mx-auto">
            <h3 class="text-xl font-semibold mb-4">Or search for what you need:</h3>
            <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="flex gap-2">
                <input
                    type="search"
                    name="s"
                    placeholder="Search properties, pages..."
                    class="flex-1 px-6 py-4 bg-gray-900 border border-gray-800 rounded-lg focus:outline-none focus:border-purple-600 text-white"
                    value="<?php echo get_search_query(); ?>"
                />
                <button type="submit" class="px-8 py-4 bg-primary rounded-lg hover:bg-purple-700 transition-colors">
                    Search
                </button>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>
