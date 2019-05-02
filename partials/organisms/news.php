<section class="news">
    <div class="container">
        <div class="default-title">
            <h2><?php // _e('Our vacanciesOUR NEWS', 'simplify'); ?><?php _e('Our vacancies', 'simplify'); ?></h2>
        </div>
        <div class="no-dots">
            <?php while (have_posts()) : the_post(); ?>
                <div class="news__wrapper   d-flex row">
                    <div class="news__wrapper__content flex-column d-flex col-12  col-lg-4 position-relative">
                        <div class="news__wrapper__content__description">
                            <div>
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                            <div class="d-flex justify-content-between align-items-lg-center align-items-center">
                                <span><?php echo get_the_date('F j, Y') ?></span>
                                <div class="see-more d-block d-lg-none">
                                    <a class="see-more__btn"
                                       href="<?php the_permalink(); ?>"><?php _e('More here', 'simplify'); ?>
                                        <img class="ml-1"
                                             src="<?php echo get_template_directory_uri() . '/html_template/build/assets/img/more-btn.png'; ?>">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="see-more d-none d-lg-block">
                            <a class="see-more__btn" href="<?php the_permalink(); ?>">
                                <?php _e('More here', 'simplify'); ?>
                                <img class="ml-1"
                                     src="<?php echo get_template_directory_uri() . '/html_template/build/assets/img/more-btn.png'; ?>">
                            </a>
                        </div>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="news__wrapper__image col-12 col-lg-7 "
                       style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>