<section class="project-mobile">
    <div class="container">
        <div class="default-title">
            <h2><?php _e('MOBILE VERSION', 'simplify'); ?></h2>
            <p></p>
        </div>
        <div class="project-mobile__info">
            <p><?php the_sub_field('text')?></p>
            <span><a href="<?php the_field('project_production_link'); ?>" target="_blank"><?php the_field('project_production_link'); ?></a></span>
        </div>
        <div class="project-mobile__image">
            <img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>" />
        </div>
    </div>
</section>