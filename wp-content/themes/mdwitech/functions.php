<?php

function mdwitech_menus()
{
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}
add_action('init', 'mdwitech_menus');

function mdwitech_theme_support()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'mdwitech_theme_support');

function mdwitech_enqueue_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('mdwitech-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1');
    wp_enqueue_style('mdwitech-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0');
    wp_enqueue_style('mdwitech-style', get_stylesheet_uri(), array(), $version);
}
add_action('wp_enqueue_scripts', 'mdwitech_enqueue_styles');

function mdwitech_register_scripts()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('mdwitech-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('mdwitech-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('mdwitech-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('mdwitech-main', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);
}
add_action('wp_enqueue_scripts', 'mdwitech_register_scripts');
