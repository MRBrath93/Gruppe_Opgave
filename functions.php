<?php

function group_post_type()
{
    register_post_type('car', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'cars',
        )

    ));
}

add_action('init', 'group_post_type');
