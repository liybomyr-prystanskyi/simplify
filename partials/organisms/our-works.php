<?php wp_reset_postdata();
$post_objects = get_sub_field('our_works');

if ($post_objects) : ?>
    <section class="our-works ">
        <div class="container">
            <div class="our-works__top-navigation row align-items-center">
                <div class="col-12 col-lg-4 d-flex justify-content-center justify-content-lg-start">
                    <div class="default-title">
                        <h2><?php _e('Our works', 'simplify'); ?></h2>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-8 d-none justify-content-between align-items-center d-lg-flex">
                    <p class="arrows our-works-left-arrow d-flex align-items-center m-0 "><span
                                class="prev-slide"></span><span class="prev-work m-0 ml-2"></span></p>
                    <p class="arrows our-works-right-arrow d-flex align-items-center m-0 flex-row-reverse"><span
                                class="next-slide"></span><span class="next-work m-0 mr-2"></span></p>
                </div>
            </div>
            <div class="our-works__slider row d-flex">
                <?php foreach ($post_objects as $post): ?>
                    <?php setup_postdata($post); ?>
                    <div class="our-works__slider__item d-flex flex-lg-row flex-column-reverse row p-0">
                        <div class="col-12 col-lg-4 description align-items-center d-flex flex-lg-wrap">
                            <div class="info text-right">
                                <h1><?php the_title(); ?></h1>
                                <a href="<?php the_field('project_production_link', $post->ID); ?>" target="_blank"><?php the_field('project_production_link', $post->ID); ?></a>
                            </div>
                          <?php $tags = get_the_tag_list('', '<br>', '', $post->ID);
                          if(!empty($tags)) : ?>
                            <div class="our-works__meta-tags">
                                <p><?php _e('Tags:', 'simplify'); ?>
                                    <span><?php echo $tags; ?></span></p>
                            </div>
                          <?php endif; ?>
                        </div>
                        <div class="col-12 col-lg-8 mask-container">
                          <a href="<?php the_permalink(); ?>">
                            <img data-name="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img" class="img">
                          </a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="see-more ">
                <a class="see-more__btn" href="<?php echo home_url('/our-work'); ?>"><?php _e('More here', 'simplify'); ?><img class="ml-1" src="<?php echo get_template_directory_uri() . '/html_template/build/assets/img/more-btn.png'; ?>"></a>
            </div>
        </div>
    </section>
<?php endif; ?>