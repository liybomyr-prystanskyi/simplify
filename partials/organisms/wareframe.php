<section class="wareframe">
    <div class="container">
        <div class="default-title">
            <h2><?php _e('WAREFRAME', 'simplify'); ?></h2>
            <p></p>
        </div>
        <div class="wareframe__info">
            <div class="wareframe__info__description">
                <?php the_sub_field('text'); ?>
            </div>
        </div>
        <div class="wareframe__image">
            <a href="<?php the_field('project_production_link'); ?>" target="_blank">
                <img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>" class="d-none d-lg-block"/>
                <img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>" class="d-block d-lg-none"/>
            </a>
        </div>
    </div>
</section>