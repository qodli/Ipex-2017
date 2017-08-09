<?php
/**
* List of theme support functions
*/

// Add WordPress theme support
if (function_exists('add_theme_support'))
{
    // Add post thumbnail feature
    add_theme_support('post-thumbnails');
    add_image_size('small', 90, 90, true);
    add_image_size('not-cropped', 90, 0, false);
    add_image_size('cropped', 90, 90, array( 'left', 'top' ));
    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');
}

function register_theme_menu()
{
    register_nav_menus(array( 
        'headernav' => __('Header Nav', 'inapex'), 
        'footernav' => __('Footer Nav', 'inapex') 
    ));
}
add_action('init', 'register_theme_menu');