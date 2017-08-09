<?php
/**
 * Javascript & CSS Files
 *
 * Function to load Javascript and CSS 
 * for theme frontend
 */

define( 'THEME_VERSION', '1.0.0' );
//Load Javascript and CSS for theme
function theme_enqueue_scripts() {
    global $pagenow;

    // Only load these scripts on frontend
    if( !is_admin() && $pagenow != 'wp-login.php' ) {
        // Load Jquery files
        wp_enqueue_script('jquery');
        // Load Javascript files
        wp_enqueue_script('boostrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), THEME_VERSION, true);
        wp_enqueue_script('platform', 'https://apis.google.com/js/platform.js', array(), THEME_VERSION, true);
        wp_enqueue_script('tablink', get_template_directory_uri().'/assets/js/tablink.js', array(), THEME_VERSION, true);
        wp_enqueue_script('general', get_template_directory_uri().'/assets/js/general.js', array(), THEME_VERSION, true);
        // Load CSS files
        wp_enqueue_style('global', get_stylesheet_directory_uri().'/assets/css/global.css', array(), THEME_VERSION, 'all');
        wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), THEME_VERSION, 'all');  
        wp_enqueue_style('boostrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), THEME_VERSION, 'all');  
        wp_enqueue_style('wp-style', get_stylesheet_directory_uri().'/style.css', array(), THEME_VERSION, 'all');
        
    }
}
add_action( 'init', 'theme_enqueue_scripts', 100 );

// Load conditional scripts
function theme_conditional_scripts()
{
    /*if (is_page('home')) {
        wp_enqueue_script('example-script', get_template_directory_uri().'/assets/example-script.js', array(), THEME_VERSION, true);
    }*/
}
add_action('wp_print_scripts', 'theme_conditional_scripts'); // Add Conditional Page Scripts
?>
