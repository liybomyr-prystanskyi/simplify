<?php global $post; $postID = $post->ID; ?>
<section class="other-news">
    <div class="container">
        <div class="other-news__navigation d-lg-flex justify-content-lg-between align-items-center">
            <div class="default-title">
                <h2><?php // _e('OTHER NEWS!', 'simplify'); ?><?php _e('Other vacancies', 'simplify'); ?></h2>
            </div>
            <div class="other-news__navigation__arrows d-none d-lg-flex align-items-center">
                <div class="prev-slide" id="other-news-left"></div>
                <div class="next-slide" id="other-news-right"></div>
            </div>
        </div>
        <div class="news-slide">
            <?php $args = [
                    'post_type' => 'post',
                    'hide_empty' => true,
                    'post__not_in' => [$postID]
            ]; ?>
            <?php $query = new WP_Query($args); ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="news-slide__item">
                    <div class="other-news__info-block d-flex row  justify-content-lg-between flex-column-reverse flex-lg-row">
                        <div class="col-12 col-lg-5 min-h-description-news flex-column d-flex justify-content-lg-between">
                            <div class="other-news__info-block__description">
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_excerpt(); ?></p>
                                <span><?php echo get_the_date('F j, Y') ?></span>
                            </div>
                            <div class="see-more justify-content-start">
                                <a class="see-more__btn" href="<?php the_permalink(); ?>"><?php _e('More here', 'simplify'); ?><img
                                            class="ml-1"
                                            src="<?php echo get_template_directory_uri() . '/html_template/build/assets/img/more-btn.png'; ?>"></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="other-news__info-block__slider">
                                <div class="other-news__info-block__slider__item"
                                     style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>