<section class="project-design">
    <div class="container">
        <div class="default-title">
            <h2><?php _e('RESPONSIVE DESIGN', 'simplify'); ?></h2>
            <p></p>
        </div>
        <div class="project-design__main">
            <div class="project-design__main__info col-12 col-lg-5 pt-3 pl-0 pr-0">
                <?php the_sub_field('text'); ?>
                <span><a href="<?php the_field('project_production_link'); ?>"
                         target="_blank"><?php the_field('project_production_link'); ?></a></span>
            </div>

            <div class="project-design__main__image col-12 col-lg-6 pl-0 pr-0">
                <a href="<?php the_field('project_production_link'); ?>" target="_blank"><img
                            src="<?php echo get_sub_field('image')['url']; ?>"
                            alt="<?php echo get_sub_field('image')['alt']; ?>"/></a>
            </div>
        </div>
    </div>
</section>