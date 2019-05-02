<?php
/**
 * Template Name: Home
 */
get_header();
?>

<?php if (have_rows('home_layout')) {
    while (have_rows('home_layout')) {
        the_row();
        get_template_part('partials/organisms/' . get_row_layout());
    }
}
?>

<?php get_footer();
