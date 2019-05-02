<?php
/**
 * Template Name: About
 */
get_header();
?>

<?php if (have_rows('about_us_rows')) {
    while (have_rows('about_us_rows')) {
        the_row();
        get_template_part('partials/organisms/' . get_row_layout());
    }
}
?>

<?php get_footer();
