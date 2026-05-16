<?php get_header(); ?>

<!-- Properties Archive -->
<section class="px-6 lg:px-20 py-16 lg:py-24">
    <div class="mb-12">
        <h1 class="text-4xl lg:text-5xl font-bold mb-4">All Properties</h1>
        <p class="text-gray-400 max-w-2xl">
            Browse our complete collection of available properties. Find your perfect home from our extensive listings.
        </p>
    </div>

    <?php if (have_posts()) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <?php
            while (have_posts()) : the_post();
                $price = get_post_meta(get_the_ID(), '_property_price', true);
                $location = get_post_meta(get_the_ID(), '_property_location', true);
                $bedrooms = get_post_meta(get_the_ID(), '_property_bedrooms', true);
                $bathrooms = get_post_meta(get_the_ID(), '_property_bathrooms', true);
                $area = get_post_meta(get_the_ID(), '_property_area', true);
                ?>
                <div class="bg-gray-900 border border-gray-800 rounded-xl overflow-hidden">
                    <div class="relative h-64 overflow-hidden">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('property-thumbnail', array('class' => 'w-full h-full object-cover hover:scale-105 transition-transform duration-300')); ?>
                            </a>
                        <?php else : ?>
                            <a href="<?php the_permalink(); ?>">
                                <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?w=800&q=80" alt="<?php the_title(); ?>" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">
                            <a href="<?php the_permalink(); ?>" class="hover:text-purple-400 transition-colors">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <?php if ($location) : ?>
                            <p class="text-gray-400 text-sm mb-4 flex items-center gap-1">
                                <i data-lucide="map-pin" class="w-4 h-4"></i>
                                <?php echo esc_html($location); ?>
                            </p>
                        <?php endif; ?>

                        <?php if (has_excerpt()) : ?>
                            <div class="text-sm text-gray-400 mb-4">
                                <?php the_excerpt(); ?>
                            </div>
                        <?php endif; ?>

                        <div class="grid grid-cols-3 gap-4 mb-4 pb-4 border-b border-gray-800">
                            <?php if ($bedrooms) : ?>
                                <div class="flex items-center gap-2 text-sm text-gray-400">
                                    <i data-lucide="bed" class="w-4 h-4"></i>
                                    <span><?php echo esc_html($bedrooms); ?>-Bedroom</span>
                                </div>
                            <?php endif; ?>

                            <?php if ($bathrooms) : ?>
                                <div class="flex items-center gap-2 text-sm text-gray-400">
                                    <i data-lucide="bath" class="w-4 h-4"></i>
                                    <span><?php echo esc_html($bathrooms); ?>-Bathroom</span>
                                </div>
                            <?php endif; ?>

                            <?php if ($area) : ?>
                                <div class="flex items-center gap-2 text-sm text-gray-400">
                                    <i data-lucide="expand" class="w-4 h-4"></i>
                                    <span><?php echo esc_html($area); ?> sqft</span>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-sm text-gray-400 mb-1">Price</div>
                                <div class="text-xl font-bold"><?php echo esc_html($price ? $price : 'Contact Us'); ?></div>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="px-6 py-3 bg-primary rounded-lg hover:bg-purple-700 transition-colors text-sm">
                                View Details
                            </a>
                        </div>
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
                'class' => 'flex gap-2',
            ));
            ?>
        </div>

    <?php else : ?>
        <div class="text-center py-16">
            <p class="text-gray-400 text-lg mb-8">No properties found. Please check back later.</p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block px-8 py-4 bg-primary rounded-lg hover:bg-purple-700 transition-colors">
                Return Home
            </a>
        </div>
    <?php endif; ?>
</section>

<?php get_footer(); ?>
