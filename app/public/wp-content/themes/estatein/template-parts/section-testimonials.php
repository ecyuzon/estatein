<!-- Testimonials -->
<section id="testimonials" class="px-6 lg:px-20 py-16 lg:py-24 bg-background">
    <div class="flex justify-between items-end mb-12">
        <div>
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">What Our Clients Say</h2>
            <p class="text-gray-400 max-w-2xl">
                Read the success stories and heartfelt testimonials from our valued clients. Discover why they chose Estatein for their real estate needs.
            </p>
        </div>
        <a href="#" class="p-6 rounded-xl bg-card border-border border text-sm hover:underline">View All Testimonials</a>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
        $testimonials_query = new WP_Query(array(
            'post_type' => 'testimonial',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
        ));

        if ($testimonials_query->have_posts()) :
            while ($testimonials_query->have_posts()) : $testimonials_query->the_post();
                $rating = get_post_meta(get_the_ID(), '_testimonial_rating', true);
                $location = get_post_meta(get_the_ID(), '_testimonial_location', true);
                ?>
                <div class="bg-card border border-border rounded-xl p-8">
                    <div class="flex gap-1 mb-4">
                        <?php
                        $star_count = $rating ? intval($rating) : 5;
                        for ($i = 0; $i < $star_count; $i++) :
                            ?>
                            <i data-lucide="star" class="w-5 h-5 fill-yellow-500 text-yellow-500"></i>
                        <?php endfor; ?>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Exceptional Service!</h3>
                    <div class="text-gray-400 mb-6 text-sm">
                        <?php the_content(); ?>
                    </div>
                    <div class="flex items-center gap-3">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('thumbnail', array('class' => 'w-12 h-12 rounded-full bg-gray-700')); ?>
                        <?php else : ?>
                            <div class="w-12 h-12 rounded-full bg-gray-700 flex items-center justify-center">
                                <i data-lucide="user" class="w-6 h-6 text-gray-400"></i>
                            </div>
                        <?php endif; ?>
                        <div>
                            <div class="font-semibold"><?php the_title(); ?></div>
                            <?php if ($location) : ?>
                                <div class="text-sm text-gray-400"><?php echo esc_html($location); ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
        else :
            ?>
            <!-- Default Testimonials if none exist -->
            <div class="bg-card border border-border rounded-xl p-8">
                <div class="flex gap-1 mb-4">
                    <i data-lucide="star" class="w-5 h-5 fill-yellow-500 text-yellow-500"></i>
                    <i data-lucide="star" class="w-5 h-5 fill-yellow-500 text-yellow-500"></i>
                    <i data-lucide="star" class="w-5 h-5 fill-yellow-500 text-yellow-500"></i>
                    <i data-lucide="star" class="w-5 h-5 fill-yellow-500 text-yellow-500"></i>
                    <i data-lucide="star" class="w-5 h-5 fill-yellow-500 text-yellow-500"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Exceptional Service!</h3>
                <p class="text-gray-400 mb-6 text-sm">
                    Estatein provided us with top-notch service. They helped us find our dream home and guided us through the entire process. Highly recommended!
                </p>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-gray-700"></div>
                    <div>
                        <div class="font-semibold">Wade Warren</div>
                        <div class="text-sm text-gray-400">USA, California</div>
                    </div>
                </div>
            </div>

            <div class="bg-card border border-border rounded-xl p-8">
                <div class="flex gap-1 mb-4">
                    <i data-lucide="star" class="w-5 h-5 fill-yellow-500 text-yellow-500"></i>
                    <i data-lucide="star" class="w-5 h-5 fill-yellow-500 text-yellow-500"></i>
                    <i data-lucide="star" class="w-5 h-5 fill-yellow-500 text-yellow-500"></i>
                    <i data-lucide="star" class="w-5 h-5 fill-yellow-500 text-yellow-500"></i>
                    <i data-lucide="star" class="w-5 h-5 fill-yellow-500 text-yellow-500"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Efficient and reliable!</h3>
                <p class="text-gray-400 mb-6 text-sm">
                    We had an amazing experience working with Estatein. They truly understand the market and helped us secure the perfect property.
                </p>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-gray-700"></div>
                    <div>
                        <div class="font-semibold">Emelie Thomson</div>
                        <div class="text-sm text-gray-400">USA, Florida</div>
                    </div>
                </div>
            </div>

            <div class="bg-card border border-border rounded-xl p-8">
                <div class="flex gap-1 mb-4">
                    <i data-lucide="star" class="w-5 h-5 fill-yellow-500 text-yellow-500"></i>
                    <i data-lucide="star" class="w-5 h-5 fill-yellow-500 text-yellow-500"></i>
                    <i data-lucide="star" class="w-5 h-5 fill-yellow-500 text-yellow-500"></i>
                    <i data-lucide="star" class="w-5 h-5 fill-yellow-500 text-yellow-500"></i>
                    <i data-lucide="star" class="w-5 h-5 fill-yellow-500 text-yellow-500"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Seamless experience!</h3>
                <p class="text-gray-400 mb-6 text-sm">
                    From start to finish, Estatein made our property search effortless. Their professionalism and expertise are unmatched.
                </p>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-gray-700"></div>
                    <div>
                        <div class="font-semibold">John Mans</div>
                        <div class="text-sm text-gray-400">USA, Nevada</div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
