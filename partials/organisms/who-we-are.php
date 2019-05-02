<section class="who-we-are">
    <div class="container">
        <div class="default-title">
            <?php // _e('WHO WE ARE?', 'simplify'); ?>
            <h2><?php _e('Here is what we do', 'simplify'); ?></h2>
        </div>
        <div class="who-we-are__global-block row">
            <?php while (have_rows('who_we_are')) : the_row(); ?>
                <div class="col-12 col-lg-5">
                    <div class="who-we-are__global-block__default">
                        <h2><?php the_sub_field('title') ?></h2>
                        <p><?php the_sub_field('description') ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php if (!is_page_template('template-about.php')) : ?>
            <div class="see-more">
                <a class="see-more__btn" href="<?php echo home_url('/about-us'); ?>"><?php _e('More here', 'simplify'); ?><img
                            class="ml-1"
                            src="<?php echo get_template_directory_uri() . '/html_template/build/assets/img/more-btn.png'; ?>"></a>
            </div>
        <?php endif; ?>
    </div>
</section>