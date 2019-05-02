<section class="open-news">
    <div class="top-circle"></div>
    <div class="centered-circle"></div>
    <div class="bottom-circle"></div>
    <div class="container mb-lg-4 mb-0">
        <div class="default-title">
            <h2><?php the_title(); ?></h2>
            <p><?php the_field('post_subtitle'); ?></p>
        </div>
    </div>
    <div>
        <?php while (have_rows('post_blocks')) : the_row(); ?>
            <div class="open-news__bb-default">
                <div class="container">
                    <div class="open-news__bb-default__wrapper">
                        <div class="open-news__bb-default__wrapper__internal">
                            <?php if ($img = get_sub_field('image')) : ?>
                                <div class="open-news__bb-default__wrapper__internal__image">
                                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>"/>
                                </div>
                            <?php endif; ?>
                            <div class="open-news__bb-default__wrapper__internal__description">
                                <?php the_sub_field('text_block'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>