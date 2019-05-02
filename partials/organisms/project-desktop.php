<section class="project-desktop">
    <div class="container">
        <div class="default-title">
            <h2><?php _e('DESKTOP VERSION', 'simplify'); ?></h2>
            <p></p>
        </div>
        <div class="project-desktop__main">
            <div class="project-desktop__main__info col-12 col-lg-6">
                <p><?php the_sub_field('description'); ?></p>
                <span><a href="<?php the_field('project_production_link'); ?>" target="_blank"><?php the_field('project_production_link'); ?></a></span>
            </div>
            <div class="project-desktop__main__arrows d-none d-lg-block col-lg-2">
                <div class="project-desktop__main__arrows__left prev-slide d-none d-lg-block "></div>
                <div class="project-desktop__main__arrows__right next-slide d-none d-lg-block"></div>
            </div>
        </div>
        <div class="project-desktop__slider">
            <?php while (have_rows('slider_images')) : the_row(); ?>
                <div class="project-desktop__slider__image">
                    <img src="<?php echo get_sub_field('image_desktop')['url']; ?>"
                         alt="<?php echo get_sub_field('image_desktop')['alt']; ?>" class="d-lg-block d-none"/>
                    <img class="d-lg-none d-block" src="<?php echo get_sub_field('image_mobile')['url']; ?>"
                         alt="<?php echo get_sub_field('image_mobile')['alt']; ?>"/>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>