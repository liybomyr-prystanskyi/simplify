<?php wp_reset_postdata();
$post_objects = get_sub_field('our_news');

if ($post_objects) : ?>
    <section class="our-news">
        <div class="container">
            <div class="our-news__navigation d-flex justify-content-lg-between justify-content-center align-items-center">
                <div class="default-title">
                    <h2><?php // _e('OUR NEWS', 'simplify'); ?><?php _e('Our vacancies', 'simplify'); ?></h2>
                    <p></p>
                </div>
                <div class="our-news__navigation__arrows d-flex align-items-center">
                    <div class="prev-slide"></div>
                    <div class="next-slide"></div>
                </div>
            </div>
            <div class="our-news__slider">
                <?php foreach ($post_objects as $post): ?>
                    <?php setup_postdata($post); ?>
                    <div class="our-news__slider__item flex-lg-row flex-column">
                        <div class="our-news__slider__item__img-block"
                             style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                        <div class="our-news__slider__item__description-block">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <p><?php the_excerpt(); ?></p>
                            <span><?php echo get_the_date('F j, Y') ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="see-more mr-3 mr-lg-0">
                <a class="see-more__btn" href="<?php echo home_url('/news'); ?>"><?php _e('More here', 'simplify'); ?>
                    <img class="ml-1"
                         src="<?php echo get_template_directory_uri() . '/html_template/build/assets/img/more-btn.png'; ?>">
                </a>
            </div>
        </div>
    </section>
<?php endif; ?>