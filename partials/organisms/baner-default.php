<section class="news-baner"
         style="background-image:url('<?php echo get_sub_field('bg_image') ? get_sub_field('bg_image') : ''; ?>');">
    <div class="news-baner__main">
        <div class="container">
            <div class="news-baner__main__title" style="background-image: url('<?php echo get_field('bg_image', get_queried_object_id()) ? get_field('bg_image', get_queried_object_id()) : ''; ?>')">
                <?php if (!empty(get_sub_field('title'))) : ?>
                    <h2><?php the_sub_field('title'); ?></h2>
                <?php else : ?>
                    <h2><?php wp_title(''); ?></h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>