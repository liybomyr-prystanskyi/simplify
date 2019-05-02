<section class="approach-statistic ">
    <div class="container">
        <div class="row approach-statistic__item">
            <div class="col-6 col-lg-3 align-items-center d-flex">
                <img class="approach-statistic__item__logo-img "
                     src="<?php echo get_sub_field('first_image_in_first_row')['url']; ?>"
                     alt="<?php echo get_sub_field('first_image_in_first_row')['alt']; ?>"/>
            </div>
            <div class="col-lg-5 d-lg-block d-none">
                <img class="approach-statistic__item__main-img"
                     src="<?php echo get_sub_field('second_image_in_first_row')['url']; ?>"
                     alt="<?php echo get_sub_field('second_image_in_first_row')['alt']; ?>"/>
            </div>

            <div class="col-6 col-lg-3 approach-statistic__item__counter-wrapper align-items-lg-end align-items-center d-flex">
                <div class="approach-statistic__item__counter-wrapper__item mb-4 mt-4">
                    <p><?php _e('More then', 'simplify'); ?></p>
                    <h2><?php the_sub_field('more_than_x_projects'); ?></h2>
                    <span><?php _e('Projects', 'simplify'); ?></span>
                </div>
            </div>
        </div>
        <div class="row approach-statistic__item">
            <div class="col-6 col-lg-3 align-items-center d-flex">
                <img class="approach-statistic__item__logo-img "
                     src="<?php echo get_sub_field('first_image_in_second_row')['url']; ?>"
                     alt="<?php echo get_sub_field('first_image_in_second_row')['alt']; ?>"/>
            </div>
            <div class="col-lg-5 d-lg-block d-none">
                <img class="approach-statistic__item__main-img"
                     src="<?php echo get_sub_field('second_image_in_second_row')['url']; ?>"
                     alt="<?php echo get_sub_field('second_image_in_second_row')['alt']; ?>"/>
            </div>

            <div class="col-6 col-lg-3 approach-statistic__item__counter-wrapper align-items-lg-end align-items-center d-flex">
                <div class="approach-statistic__item__counter-wrapper__item mb-4 mt-4">
                    <p><?php _e('More then', 'simplify'); ?></p>
                    <h2><?php the_sub_field('more_than_y_clients'); ?></h2>
                    <span><?php _e('Clients', 'simplify'); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>