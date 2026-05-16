<!-- Featured Properties -->
<section id="properties" class="px-6 lg:px-20 py-16 lg:py-24">
    <div class="flex justify-between items-end mb-12">
        <div>
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">Featured Properties</h2>
            <p class="text-gray-400 max-w-2xl">
                Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes and investments available through Estatein.
            </p>
        </div>
        <a href="<?php echo esc_url(get_post_type_archive_link('property')); ?>" class="p-6 rounded-xl bg-card border-border border text-sm hover:underline">View All Properties</a>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
        $properties_query = new WP_Query(array(
            'post_type' => 'property',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
        ));

        if ($properties_query->have_posts()) :
            while ($properties_query->have_posts()) : $properties_query->the_post();
                $price = get_post_meta(get_the_ID(), '_property_price', true);
                $location = get_post_meta(get_the_ID(), '_property_location', true);
                $bedrooms = get_post_meta(get_the_ID(), '_property_bedrooms', true);
                $bathrooms = get_post_meta(get_the_ID(), '_property_bathrooms', true);
                $area = get_post_meta(get_the_ID(), '_property_area', true);
                ?>
                <div class="bg-card border border-red-50 rounded-xl overflow-hidden">
                    <div class="relative h-64 overflow-hidden">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('property-thumbnail', array('class' => 'w-full h-full object-cover')); ?>
                        <?php else : ?>
                            <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?w=800&q=80" alt="<?php the_title(); ?>" class="w-full h-full object-cover">
                        <?php endif; ?>
                    </div>
                    <div class="p-6 bg-card border border-red-50">
                        <h3 class="text-xl font-semibold mb-2"><?php the_title(); ?></h3>
                        <?php if ($location) : ?>
                            <p class="text-gray-400 text-sm mb-4 flex items-center gap-1">
                                <i data-lucide="map-pin" class="w-4 h-4"></i>
                                <?php echo esc_html($location); ?>
                            </p>
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
                            <a href="<?php the_permalink(); ?>" class="px-6 py-3 bg-primary rounded-lg hover:bg-primary/10 transition-colors text-sm">
                                View Property Details
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
        else :
            ?>
            <!-- Default Properties if none exist -->
            <div class="bg-card border border-border rounded-xl overflow-hidden">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?w=800&q=80" alt="Seaside Serenity Villa" class="w-full h-full object-cover">
                </div>
                <div class="p-6 ">
                    <h3 class="text-xl font-semibold mb-2">Seaside Serenity Villa</h3>
                    <p class="text-gray-400 text-sm mb-4 flex items-center gap-1">
                        <i data-lucide="map-pin" class="w-4 h-4"></i>
                        Malibu, California
                    </p>
                    <div class="grid grid-cols-3 gap-4 mb-4 pb-4 border-b border-gray-800">
                        <div class="flex items-center gap-2 text-sm text-gray-400">
                            <i data-lucide="bed" class="w-4 h-4"></i>
                            <span>4-Bedroom</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-400">
                            <i data-lucide="bath" class="w-4 h-4"></i>
                            <span>3-Bathroom</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-400">
                            <i data-lucide="expand" class="w-4 h-4"></i>
                            <span>2,500 sqft</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-sm text-gray-400 mb-1">Price</div>
                            <div class="text-xl font-bold">$550,000</div>
                        </div>
                        <button class="px-6 py-3 bg-primary rounded-lg hover:bg-purple-700 transition-colors text-sm">
                            View Property Details
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-card border border-border rounded-xl overflow-hidden">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=800&q=80" alt="Metropolitan Haven" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Metropolitan Haven</h3>
                    <p class="text-gray-400 text-sm mb-4 flex items-center gap-1">
                        <i data-lucide="map-pin" class="w-4 h-4"></i>
                        Downtown Dubai
                    </p>
                    <div class="grid grid-cols-3 gap-4 mb-4 pb-4 border-b border-gray-800">
                        <div class="flex items-center gap-2 text-sm text-gray-400">
                            <i data-lucide="bed" class="w-4 h-4"></i>
                            <span>3-Bedroom</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-400">
                            <i data-lucide="bath" class="w-4 h-4"></i>
                            <span>2-Bathroom</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-400">
                            <i data-lucide="expand" class="w-4 h-4"></i>
                            <span>1,800 sqft</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-sm text-gray-400 mb-1">Price</div>
                            <div class="text-xl font-bold">$950,000</div>
                        </div>
                        <button class="px-6 py-3 bg-primary rounded-lg hover:bg-purple-700 transition-colors text-sm">
                            View Property Details
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-card border border-border rounded-xl overflow-hidden">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=800&q=80" alt="Rustic Retreat Cottage" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Rustic Retreat Cottage</h3>
                    <p class="text-gray-400 text-sm mb-4 flex items-center gap-1">
                        <i data-lucide="map-pin" class="w-4 h-4"></i>
                        Aspen, Colorado
                    </p>
                    <div class="grid grid-cols-3 gap-4 mb-4 pb-4 border-b border-gray-800">
                        <div class="flex items-center gap-2 text-sm text-gray-400">
                            <i data-lucide="bed" class="w-4 h-4"></i>
                            <span>5-Bedroom</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-400">
                            <i data-lucide="bath" class="w-4 h-4"></i>
                            <span>4-Bathroom</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-400">
                            <i data-lucide="expand" class="w-4 h-4"></i>
                            <span>3,200 sqft</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-sm text-gray-400 mb-1">Price</div>
                            <div class="text-xl font-bold">$1,200,000</div>
                        </div>
                        <button class="px-6 py-3 bg-primary rounded-lg hover:bg-purple-700 transition-colors text-sm">
                            View Property Details
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
