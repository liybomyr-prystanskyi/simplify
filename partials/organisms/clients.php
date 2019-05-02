<section class="client-block">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="default-title">
                <h2><?php _e('CLIENTS', 'simplify'); ?></h2>
            </div>
            <div class="clients-navigation-arrows d-flex align-items-center">
                <div class="clients-block-left-arrow"></div>
                <div class="clients-block-right-arrow"></div>
            </div>
        </div>
        <div class="client-block__brands-block justify-content-lg-between">
            <?php while (have_rows('clients', 'option')) : the_row(); ?>
                <div class="client-block__brands-block__logo">
                    <?php if (get_sub_field('link_to_website')) : ?>
                        <a href="<?php the_sub_field('link_to_website'); ?>" target="_blank">
                            <img src="<?php the_sub_field('clients_logo'); ?>"/>
                        </a>
                    <?php else : ?>
                        <img src="<?php the_sub_field('clients_logo'); ?>"/>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>