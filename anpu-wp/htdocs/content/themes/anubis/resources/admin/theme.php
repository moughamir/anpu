<?php

/**
 * Optimise wp head
 */
function head_optimise () {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');

    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);

    add_filter('the_generator', '__return_false');
    add_filter('show_admin_bar','__return_false');
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    
}
add_action('after_setup_theme', 'head_optimise');

/**
 * Change WordPress API prefix
 */
function changeRestPrefix() {
    return "api";
}
add_filter( 'rest_url_prefix', 'changeRestPrefix');