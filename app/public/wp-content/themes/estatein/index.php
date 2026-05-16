<?php get_header(); ?>

<!-- Hero Section -->
<section id="hero" class="">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="lg: p-10">
            <h1 class="text-4xl lg:text-6xl font-bold mb-6 leading-tight">
                <?php echo esc_html(get_theme_mod('hero_title', 'Discover Your Dream Property with Estatein')); ?>
            </h1>
            <p class="text-gray-400 mb-8 text-lg">
                <?php echo esc_html(get_theme_mod('hero_description', 'Your journey to finding the perfect property begins here. Explore our listings to find the home that matches your dreams.')); ?>
            </p>
            <div class="flex gap-4 mb-12">
                <button class="px-6 py-3 text-sm border border-gray-700 rounded-lg hover:bg-gray-800 transition-colors">
                    Learn More
                </button>
                <a href="<?php echo esc_url(get_post_type_archive_link('property')); ?>" class="px-6 py-3 text-sm bg-primary rounded-lg hover:bg-purple-600 transition-colors">
                    Browse Properties
                </a>
            </div>
            <div class="grid grid-cols-3 gap-8">
                <div class="rounded-xl bg-[#1A1A1A] border border-[#262626] px-6 py-4 content-center">
                    <div class="text-3xl font-bold mb-1"><?php echo esc_html(get_theme_mod('stat_customers', '200+')); ?></div>
                    <div class="text-sm text-gray-400">Happy Customers</div>
                </div>
                <div class="rounded-xl bg-[#1A1A1A] border border-[#262626] px-6 py-4 content-center">
                    <div class="text-3xl font-bold mb-1"><?php echo esc_html(get_theme_mod('stat_properties', '10k+')); ?></div>
                    <div class="text-sm text-gray-400">Properties For Clients</div>
                </div>
                <div class="rounded-xl bg-[#1A1A1A] border border-[#262626] px-6 py-4 content-center">
                    <div class="text-3xl font-bold mb-1"><?php echo esc_html(get_theme_mod('stat_experience', '16+')); ?></div>
                    <div class="text-sm text-gray-400">Years of Experience</div>
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="w-full h-full bg-gradient-to-br from-blue-900/20 to-purple-900/20 rounded-2xl relative">
                <img src="<?php echo esc_url(get_theme_mod('hero_image', get_template_directory_uri() . '/assets/images/discover-circle.png')); ?>"
                    alt="Discover Circle"
                    class="absolute top-1/4 -left-18 w-40 h-40"
                />
                <img
                    src="<?php echo esc_url(get_theme_mod('hero_image', get_template_directory_uri() . '/assets/images/hero-image.png')); ?>"
                    alt="Modern buildings"
                    class="w-full h-full object-cover"
                />
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section id="features" class="px-6 lg:px-20 py-12 border-y border-gray-800">
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="rounded-xl bg-[#1A1A1A] border border-[#262626] px-10 py-6 text-center h-full">
            
            <img
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/sub-icon-1.png'); ?>"
                alt="Dream Home"
                class="w-20 h-20 object-cover items-center justify-center mx-auto mb-4"
            />
            
            <h3 class="font-semibold mb-2">Find Your Dream Home</h3>
        </div>
        <div class="rounded-xl bg-[#1A1A1A] border border-[#262626] px-10 py-6 text-center h-full">
            
            <img
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/sub-icon-2.png'); ?>"
                alt="Dream Home"
                class="w-20 h-20 object-cover items-center justify-center mx-auto mb-4"
            />
            
            <h3 class="font-semibold mb-2">Unlock Property Value</h3>
        </div>
        <div class="rounded-xl bg-[#1A1A1A] border border-[#262626] px-10 py-6 text-center h-full">
            
            <img
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/sub-icon-3.png'); ?>"
                alt="Dream Home"
                class="w-20 h-20 object-cover items-center justify-center mx-auto mb-4"
            />
            
            <h3 class="font-semibold mb-2">Effortless Property Management</h3>
        </div>
        <div class="rounded-xl bg-[#1A1A1A] border border-[#262626] px-10 py-6 text-center h-full">
            
            <img
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/sub-icon-4.png'); ?>"
                alt="Dream Home"
                class="w-20 h-20 object-cover items-center justify-center mx-auto mb-4"
            />
            
            <h3 class="font-semibold mb-2">Smart Investments, Informed Decisions</h3>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/section', 'properties'); ?>

<?php get_template_part('template-parts/section', 'testimonials'); ?>

<?php get_template_part('template-parts/section', 'faq'); ?>

<!-- CTA Section -->
<section class="px-6 lg:px-20 py-16 lg:py-24 bg-background border border-border">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl lg:text-4xl font-bold mb-4">Start Your Real Estate Journey Today</h2>
        <p class="text-gray-400 mb-8 max-w-2xl mx-auto">
            Your dream property is just a click away. Whether you're looking for a new home, a strategic investment, or expert real estate advice, Estatein is here to assist you every step of the way.
        </p>
        <a href="<?php echo esc_url(get_post_type_archive_link('property')); ?>" class="inline-block px-8 py-4 bg-primary rounded-lg hover:bg-purple-700 transition-colors">
            Browse Properties
        </a>
    </div>
</section>

<?php get_footer(); ?>
