<?php get_header(); ?>

<section class="px-6 lg:px-20 py-16 lg:py-24">
    <div class="mb-12">
        <h1 class="text-4xl lg:text-5xl font-bold mb-4">
            <?php printf(esc_html__('Search Results for: %s', 'estatein'), '<span class="text-purple-400">' . get_search_query() . '</span>'); ?>
        </h1>
        <?php if (have_posts()) : ?>
            <p class="text-gray-400">
                <?php printf(esc_html__('Found %d results', 'estatein'), $wp_query->found_posts); ?>
            </p>
        <?php endif; ?>
    </div>

    <?php if (have_posts()) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <?php while (have_posts()) : the_post(); ?>
                <div class="bg-gray-900 border border-gray-800 rounded-xl overflow-hidden">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="relative h-48 overflow-hidden">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover hover:scale-105 transition-transform duration-300')); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <div class="p-6">
                        <div class="text-xs text-purple-400 mb-2 uppercase">
                            <?php echo esc_html(get_post_type()); ?>
                        </div>

                        <h3 class="text-xl font-semibold mb-3">
                            <a href="<?php the_permalink(); ?>" class="hover:text-purple-400 transition-colors">
                                <?php the_title(); ?>
                            </a>
                        </h3>

                        <div class="text-sm text-gray-400 mb-4">
                            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 text-purple-400 hover:underline text-sm">
                            Read More
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center gap-4">
            <?php
            echo paginate_links(array(
                'prev_text' => '<i data-lucide="chevron-left" class="w-5 h-5"></i>',
                'next_text' => '<i data-lucide="chevron-right" class="w-5 h-5"></i>',
                'type' => 'list',
            ));
            ?>
        </div>

    <?php else : ?>
        <div class="text-center py-16">
            <div class="mb-8">
                <i data-lucide="search" class="w-24 h-24 mx-auto text-gray-700 mb-6"></i>
            </div>

            <h2 class="text-2xl font-bold mb-4">No Results Found</h2>
            <p class="text-gray-400 text-lg mb-8">
                Sorry, we couldn't find any results for "<?php echo get_search_query(); ?>". Try searching with different keywords.
            </p>

            <!-- Search Form -->
            <div class="max-w-2xl mx-auto mb-8">
                <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="flex gap-2">
                    <input
                        type="search"
                        name="s"
                        placeholder="Try another search..."
                        class="flex-1 px-6 py-4 bg-gray-900 border border-gray-800 rounded-lg focus:outline-none focus:border-purple-600 text-white"
                    />
                    <button type="submit" class="px-8 py-4 bg-primary rounded-lg hover:bg-purple-700 transition-colors">
                        Search
                    </button>
                </form>
            </div>

            <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block px-8 py-4 border border-gray-700 rounded-lg hover:bg-gray-800 transition-colors">
                Return to Homepage
            </a>
        </div>
    <?php endif; ?>
</section>

<?php get_footer(); ?>
