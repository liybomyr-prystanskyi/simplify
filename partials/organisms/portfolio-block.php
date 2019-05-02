<?php $terms = get_terms([
    'taxonomy' => 'portfolio_categories',
    'hide_empty' => true
]); ?>
<?php $obj = get_queried_object(); ?>
<?php if (!is_tag()) : ?>
  <section class="portfolio">
    <div class="filter-portfolio-links">
      <div class="container">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="active" id="all-tab"
             data-toggle="tab" href="#all" role="tab"
             aria-controls="all-projects" aria-selected="true">All projects</a>
            <?php foreach ($terms as $term) : ?>
              <a class="" id="<?php echo $term->slug; ?>-tab"
                 data-toggle="tab" href="#<?php echo $term->slug; ?>" role="tab"
                 aria-controls="all-projects" aria-selected="true"><?php echo $term->name; ?></a>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
    <nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
          <div class="bb-default">
            <div class="container">
              <div class="row d-flex justify-content-lg-between">
                  <?php $args = [
                      'post_type' => 'portfolio',
                      'hide_empty' => true,
                  ]; ?>
                  <?php $query = new WP_Query($args); ?>
                  <?php while ($query->have_posts()) :
                      $query->the_post(); ?>
                    <div class="portfolio__block flex-column col-lg-6 col-12 ">
                      <div class="portfolio__block__description align-items-lg-center d-flex flex-column flex-lg-row">
                        <div class="info text-right">
                          <h1><?php the_title(); ?></h1>
                        </div>
                      </div>
                      <div class="mask-container">
                        <a href="<?php the_permalink(); ?>">
                          <img data-name="<?php the_title(); ?>"
                               src="<?php echo get_the_post_thumbnail_url(); ?>"
                               alt="<?php the_title(); ?>" class="img">
                        </a>
                      </div>
                      <div class="row mt-3 m-0">
                        <div class="col-lg-6 col-12 p-0">
                            <?php $tags = get_the_tag_list('', ', ', '', $post->ID);
                            if (!empty($tags)) : ?>
                              <div class="portfolio__block__description__meta-tags">
                                <p><?php _e('Tags:', 'simplify'); ?>
                                  <span><?php echo $tags ?></span>
                                </p>
                              </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-6 col-12 p-0 d-flex justify-content-lg-end">
                          <a class="site-url-portfolio"
                             href="<?php the_field('project_production_link'); ?>"
                             tabindex="0"><?php the_field('project_production_link'); ?></a>
                        </div>
                      </div>
                    </div>
                  <?php endwhile; ?>
              </div>
            </div>
          </div>
        </div>
          <?php foreach ($terms as $term) : ?>
            <div class="tab-pane fade"
                 id="<?php echo $term->slug; ?>" role="tabpanel"
                 aria-labelledby="<?php echo $term->slug; ?>-tab">
              <div class="bb-default">
                <div class="container">
                  <div class="row d-flex justify-content-lg-between">
                      <?php $args = [
                          'post_type' => 'portfolio',
                          'hide_empty' => true,
                          'portfolio_categories' => $term->slug
                      ]; ?>
                      <?php $query = new WP_Query($args); ?>
                      <?php while ($query->have_posts()) :
                          $query->the_post(); ?>
                        <div class="portfolio__block flex-column col-lg-6 col-12 ">
                          <div class="portfolio__block__description align-items-lg-center d-flex flex-column flex-lg-row">
                            <div class="info text-right">
                              <h1><?php the_title(); ?></h1>
                            </div>
                          </div>
                          <div class="mask-container">
                            <a href="<?php the_permalink(); ?>">
                              <img data-name="<?php the_title(); ?>"
                                   src="<?php echo get_the_post_thumbnail_url(); ?>"
                                   alt="<?php the_title(); ?>" class="img">
                            </a>
                          </div>
                          <div class="row mt-3 m-0">
                            <div class="col-lg-6 col-12 p-0">
                                <?php $tags = get_the_tag_list('', ', ', '', $post->ID);
                                if (!empty($tags)) : ?>
                                  <div class="portfolio__block__description__meta-tags">
                                    <p><?php _e('Tags:', 'simplify'); ?>
                                      <span><?php echo $tags ?></span>
                                    </p>
                                  </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-lg-6 col-12 p-0 d-flex justify-content-lg-end">
                              <a class="site-url-portfolio"
                                 href="<?php the_field('project_production_link'); ?>"
                                 tabindex="0"><?php the_field('project_production_link'); ?></a>
                            </div>
                          </div>
                        </div>
                      <?php endwhile; ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
      </div>
    </nav>
  </section>
<?php else : ?>
    <?php $args = [
        'post_type' => 'portfolio',
        'hide_empty' => true,
        'tag' => $obj->slug
    ]; ?>
    <?php $query = new WP_Query($args); ?>
  <div class="bb-default">
    <div class="container">
      <div class="row d-flex justify-content-lg-between">
          <?php while ($query->have_posts()) :
              $query->the_post(); ?>
            <div class="portfolio__block flex-column col-lg-6 col-12 ">
              <div class="portfolio__block__description align-items-lg-center d-flex flex-column flex-lg-row">
                <div class="info text-right">
                  <h1><?php the_title(); ?></h1>
                </div>
              </div>
              <div class="mask-container">
                <a href="<?php the_permalink(); ?>">
                  <img data-name="<?php the_title(); ?>"
                       src="<?php echo get_the_post_thumbnail_url(); ?>"
                       alt="<?php the_title(); ?>" class="img">
                </a>
              </div>
              <div class="row mt-3 m-0">
                <div class="col-lg-6 col-12 p-0">
                  <div class="portfolio__block__description__meta-tags">
                    <p><?php _e('Tags:', 'simplify'); ?>
                      <span><?php echo get_the_tag_list('', ', ', '', $post->ID); ?></span>
                    </p>
                  </div>
                </div>
                <div class="col-lg-6 col-12 p-0 d-flex justify-content-lg-end">
                  <a class="site-url-portfolio"
                     href="<?php the_field('project_production_link'); ?>"
                     tabindex="0"><?php the_field('project_production_link'); ?></a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
