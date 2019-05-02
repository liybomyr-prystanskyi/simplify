<section class="about-us">
    <div class="container">
        <div class="about-us__navigation d-flex justify-content-lg-between align-items-lg-center">
            <div class="default-title">
                <h2><?php _e('ABOUT US', 'simplify'); ?></h2>
            </div>
            <div class="about-us__navigation__arrows d-flex align-items-center">
                <div class="prev-slide about-left"></div>
                <div class="next-slide about-right"></div>
            </div>
        </div>
        <div class=" d-flex justify-content-lg-between align-items-lg-start mt-35 m-0-xs flex-lg-row flex-column-reverse">
            <div class="about-us__description col-12 col-lg-6 p-0 pr-3">
                <?php the_sub_field('text'); ?>
                <div class="d-flex align-items-lg-start justify-content-lg-between">
                    <div class="approach-statistic__item__counter-wrapper col-6 col-lg-3 align-items-lg-end align-items-center d-flex">
                        <div class="approach-statistic__item__counter-wrapper__item mb-4 mt-4">
                            <p><?php _e('More then', 'simplify'); ?></p>
                            <h2><?php the_sub_field('more_than_x_projects'); ?></h2>
                            <span><?php _e('Projects', 'simplify'); ?></span>
                        </div>
                    </div>
                    <div class="col-6 mr-5 col-lg-3 approach-statistic__item__counter-wrapper align-items-lg-end align-items-center d-flex">
                        <div class="approach-statistic__item__counter-wrapper__item mb-4 mt-4">
                            <p><?php _e('More then', 'simplify'); ?></p>
                            <h2><?php the_sub_field('more_than_y_clients'); ?></h2>
                            <span><?php _e('Clients', 'simplify'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-us__slider col-12 col-lg-6 p-0">
                <div class="about-us__slider__wrapper">
                    <?php while (have_rows('slider_images')) : the_row(); ?>
                        <div class="about-us__slider__wrapper__item">
                            <img src="<?php echo get_sub_field('image')['url']; ?>"
                                 alt="<?php echo get_sub_field('image')['alt']; ?>"/>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>