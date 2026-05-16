<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <section class="">
        <div class="">
            <!-- <h1 class="text-4xl lg:text-5xl font-bold mb-8"><?php the_title(); ?></h1> -->

            <?php if (has_post_thumbnail()) : ?>
                <div class="mb-8 rounded-2xl overflow-hidden">
                    <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
                </div>
            <?php endif; ?>

            <div class="prose prose-invert prose-lg max-w-none">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
<?php endwhile; ?>

<?php get_footer(); ?>
