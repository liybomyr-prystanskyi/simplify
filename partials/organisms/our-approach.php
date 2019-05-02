<section class="our-approach">
    <div class="container">
        <div class="default-title">
            <h2><?php _e('OUR APPROACH', 'simplify'); ?></h2>
            <p></p>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8 our-approach__description-approach">
                <p><?php the_sub_field('description_text'); ?></p>
            </div>
            <div class="our-approach__wrapper col-12 col-sm-12 col-lg-12 mt-3">
                <?php $i = 1; while(have_rows('points')) : the_row(); ?>
                <div class="our-approach__wrapper__item col-12 col-sm-4 col-lg-3">
                    <div class="bg-image">
                        <img src="<?php the_sub_field('icon'); ?>" alt="">
                    </div>
                    <p><?php the_sub_field('caption'); ?></p>
                    <h2 class="bg-number"><?php echo $i; ?></h2>
                </div>
                <?php $i++; endwhile; ?>
            </div>
        </div>
    </div>
</section>