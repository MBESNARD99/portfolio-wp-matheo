<?php

function sydney_child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'sydney_child_enqueue_styles');


require_once get_stylesheet_directory() . '/cpt-portfolio.php';

add_action('smart-cf-register-fields', 'register_portfolio_custom_fields');

add_filter('template_include', function ($template) {
    if (is_post_type_archive('portfolio')) {
        return get_stylesheet_directory() . '/archive-portfolio.php';
    }
    return $template;
});
