<section class="project">
    <div class="container">
        <div class="project__info">
            <div class=" align-items-center d-flex flex-lg-wrap">
                <div class="info text-right project__info__title">
                    <h2><?php the_title(); ?></h2>
                    <a href="<?php the_field('project_production_link'); ?>"
                       class="project__info__title__link d-none d-lg-block" target="_blank">
                        <?php the_field('project_production_link'); ?>
                    </a>
                </div>
            </div>
            <div class="project__info__background">
                <a href="<?php the_field('project_production_link'); ?>" target="_blank">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                </a>
            </div>
            <div class="mt-130">
                <div class="default-title">
                    <h2><?php _e('ABOUT THE PROJECT', 'simplify'); ?></h2>
                    <p></p>
                </div>
                <div class="project__info__project">
                    <div class="project__info__project__description col-12 col-lg-5">
                        <?php the_sub_field('about_the_project_left'); ?>
                        <span><a href="<?php the_field('project_production_link'); ?>" target="_blank"><?php the_field('project_production_link'); ?></a></span>
                    </div>
                    <div class="project__info__project__description col-12 col-lg-5">
                        <?php the_sub_field('about_the_project_right'); ?>
                        <span><a href="<?php the_field('project_production_link'); ?>" target="_blank"><?php the_field('project_production_link'); ?></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>