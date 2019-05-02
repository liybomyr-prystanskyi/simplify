<?php get_header(); ?>

<?php if (have_rows('portfolio_item_layout')) {
    while (have_rows('portfolio_item_layout')) {
        the_row();
        get_template_part('partials/organisms/' . get_row_layout());
    }
}
?>

<?php get_footer();
