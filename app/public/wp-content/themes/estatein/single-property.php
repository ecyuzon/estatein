<?php get_header(); ?>

<?php
while (have_posts()) : the_post();
    $price = get_post_meta(get_the_ID(), '_property_price', true);
    $location = get_post_meta(get_the_ID(), '_property_location', true);
    $bedrooms = get_post_meta(get_the_ID(), '_property_bedrooms', true);
    $bathrooms = get_post_meta(get_the_ID(), '_property_bathrooms', true);
    $area = get_post_meta(get_the_ID(), '_property_area', true);
    ?>

    <!-- Property Detail -->
    <section class="px-6 lg:px-20 py-16 lg:py-24">
        <div class="max-w-6xl mx-auto">
            <!-- Back Link -->
            <a href="<?php echo esc_url(get_post_type_archive_link('property')); ?>" class="inline-flex items-center gap-2 text-purple-400 hover:underline mb-8">
                <i data-lucide="arrow-left" class="w-4 h-4"></i>
                Back to Properties
            </a>

            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Image -->
                <div class="relative h-96 lg:h-auto overflow-hidden rounded-2xl bg-gray-900">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('hero-image', array('class' => 'w-full h-full object-cover')); ?>
                    <?php else : ?>
                        <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?w=1200&q=80" alt="<?php the_title(); ?>" class="w-full h-full object-cover">
                    <?php endif; ?>
                </div>

                <!-- Details -->
                <div>
                    <h1 class="text-4xl font-bold mb-4"><?php the_title(); ?></h1>

                    <?php if ($location) : ?>
                        <p class="text-gray-400 text-lg mb-6 flex items-center gap-2">
                            <i data-lucide="map-pin" class="w-5 h-5"></i>
                            <?php echo esc_html($location); ?>
                        </p>
                    <?php endif; ?>

                    <div class="grid grid-cols-3 gap-6 mb-8 pb-8 border-b border-gray-800">
                        <?php if ($bedrooms) : ?>
                            <div>
                                <div class="flex items-center gap-2 text-gray-400 mb-2">
                                    <i data-lucide="bed" class="w-5 h-5"></i>
                                    <span class="text-sm">Bedrooms</span>
                                </div>
                                <div class="text-2xl font-bold"><?php echo esc_html($bedrooms); ?></div>
                            </div>
                        <?php endif; ?>

                        <?php if ($bathrooms) : ?>
                            <div>
                                <div class="flex items-center gap-2 text-gray-400 mb-2">
                                    <i data-lucide="bath" class="w-5 h-5"></i>
                                    <span class="text-sm">Bathrooms</span>
                                </div>
                                <div class="text-2xl font-bold"><?php echo esc_html($bathrooms); ?></div>
                            </div>
                        <?php endif; ?>

                        <?php if ($area) : ?>
                            <div>
                                <div class="flex items-center gap-2 text-gray-400 mb-2">
                                    <i data-lucide="expand" class="w-5 h-5"></i>
                                    <span class="text-sm">Area</span>
                                </div>
                                <div class="text-2xl font-bold"><?php echo esc_html($area); ?> sqft</div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-8">
                        <div class="text-sm text-gray-400 mb-2">Price</div>
                        <div class="text-4xl font-bold text-purple-400"><?php echo esc_html($price ? $price : 'Contact Us'); ?></div>
                    </div>

                    <div class="prose prose-invert max-w-none mb-8">
                        <?php the_content(); ?>
                    </div>

                    <div class="flex gap-4">
                        <button class="px-8 py-4 bg-primary rounded-lg hover:bg-purple-700 transition-colors">
                            Schedule a Viewing
                        </button>
                        <button class="px-8 py-4 border border-gray-700 rounded-lg hover:bg-gray-800 transition-colors">
                            Contact Agent
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>
