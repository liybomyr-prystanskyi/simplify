<?php

// theme setup
add_action('after_setup_theme', 'simplify_setup');
function simplify_setup()
{

    add_theme_support('custom-logo', array(
        'flex-height' => true,
        'flex-width' => true,
    ));

    // Enable plugins to manage the document title
    // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
    add_theme_support('title-tag');

    // Register wp_nav_menu() menus
    // http://codex.wordpress.org/Function_Reference/register_nav_menus
    register_nav_menus([
        'primary_navigation' => 'Primary Navigation',
    ]);

    // Enable post thumbnails
    // http://codex.wordpress.org/Post_Thumbnails
    // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
    // http://codex.wordpress.org/Function_Reference/add_image_size
    add_theme_support('post-thumbnails');

    // Enable HTML5 markup support
    // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);
}


// Allow SVG through WordPress Media Uploader
add_filter('upload_mimes', 'cc_mime_types');
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

// Enqueue scripts and styles.
add_action('wp_enqueue_scripts', 'simplify_scripts');
function simplify_scripts()
{
    // Theme stylesheet
    $path = get_template_directory_uri() . '/html_template/build/assets/'; //local path to directory with styles and scripts
    wp_enqueue_style('simplify-bootstrap-css', $path . 'css/vendors/bootstrap.min.css', '', false, 'all');
    wp_enqueue_style('simplify-aos-css', $path . 'css/vendors/aos.css', 'simplify-bootstrap-css', false, 'all');
    wp_enqueue_style('simplify-fonts-css', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 'simplify-aos-css', false, 'all');
    wp_enqueue_style('simplify-slick-css', $path . 'css/vendors/slick.css', 'simplify-fonts-css', false, 'all');
    wp_enqueue_style('simplify-slick-theme-css', $path . 'css/vendors/slick-theme.css', 'simplify-slick-css', false, 'all');
    wp_enqueue_style('simplify-style', $path . 'css/style.min.css', 'simplify-slick-theme-css', false, 'all');
    wp_enqueue_style('style', get_stylesheet_uri(), 'simplify-style', '1.0.2');

    // Theme js
    wp_enqueue_script('simplify-jquery-js', $path . 'js/vendors/jquery-3.3.1.js', array(), false, true);
    wp_enqueue_script('simplify-slick-js', $path . 'js/vendors/slick.min.js', 'simplify-jquery-js', false, true);
    wp_enqueue_script('simplify-bootstrap-js', $path . 'js/vendors/bootstrap.js', 'simplify-aos-js', false, true);
    wp_enqueue_script('simplify-general-js', $path . 'js/script.min.js', 'simplify-nice-select-js', false, true);
//    wp_enqueue_script('simplify-custom-js', get_template_directory_uri() . '/custom.js', 'simplify-general-js', false, true);

    $ajax_url = admin_url('admin-ajax.php');
    wp_localize_script('simplify-js', 'wpData', array(
        'ajax_url' => $ajax_url,
        'html_template_directory' => get_template_directory_uri() . '/html_template/build/'
    ));
    wp_enqueue_script('simplify-js');

}

add_action('acf/init', 'my_acf_init');

function my_acf_init()
{

    if (function_exists('acf_add_options_page')) {

        acf_add_options_page([
            'page_title' => 'Theme General Settings',
            'menu_title' => 'Theme Settings',
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false
        ]);

//    acf_add_options_sub_page([
//        'page_title' => 'Repeating blocks',
//        'menu_title' => 'Repeating blocks',
//        'parent_slug' => 'theme-general-settings',
//    ]);

        acf_update_setting('google_api_key', 'AIzaSyDoLs4jh4_7ZW16LDVDAXDPGISWv9RN-x8');

    }
}

// Add Certificates Post type
add_action('init', 'smplfy_register_cpt');
function smplfy_register_cpt()
{
    register_post_type('portfolio', [
        'labels' => [
            'name' => 'Portfolio', // Основное название типа записи
            'singular_name' => 'Portfolio item', // отдельное название записи
            'add_new' => 'Add new',
            'add_new_item' => 'Add new portfolio item',
            'edit_item' => 'Edit portfolio item',
            'new_item' => 'New portfolio item',
            'view_item' => 'View portfolio item',
            'search_items' => 'Find portfolio item',
            'not_found' => 'No portfolio items found',
            'not_found_in_trash' => 'No portfolio items found in trash',
            'parent_item_colon' => '',
            'menu_name' => 'Portfolio'
        ],
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'taxonomies' => array('post_tag', 'portfolio_categories'),
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'thumbnail')
    ]);
}

add_action('init', 'smplfy_register_taxonomies');
function smplfy_register_taxonomies()
{
    register_taxonomy('portfolio_categories', array('portfolio'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Portfolio categories', 'taxonomy general name'),
            'singular_name' => _x('Portfolio category', 'taxonomy singular name'),
            'search_items' => __('Find portfolio category'),
            'all_items' => __('All portfolio categories'),
            'parent_item' => __('Parent category'),
            'parent_item_colon' => __('Parent category:'),
            'edit_item' => __('Edit portfolio category'),
            'update_item' => __('Update portfolio category'),
            'add_new_item' => __('Add new portfolio category'),
            'new_item_name' => __('Portfolio category name'),
            'menu_name' => __('Portfolio categories'),
        ),
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'portfolio-category'), // свой слаг в URL
    ));
}

function is_blog () {
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}