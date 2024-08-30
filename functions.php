<?php

function group_files()
{
    wp_enqueue_style('mainstyle', get_theme_file_uri('/style.css'));
}

add_action(' wp_enqueue_scripts', 'mainstyle');

function group_post_type()
{
    register_post_type('car', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Cars',
        )

    ));
}

add_action('init', 'group_post_type');


function group_features()
{
    // Aktiverer WordPress' title-tag support, hvilket gør det muligt for WordPress at administrere side-titler dynamisk.
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

// Hooker 'university_features' funktionen til WordPress' 'after_setup_theme' action hook, hvilket sikrer, at denne funktionalitet er aktiveret, når temaet er klar.
add_action('after_setup_theme', 'group_features');
