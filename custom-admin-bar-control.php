<?php
/*
Plugin Name: Custom Admin Bar Control (CABC)
Description: CABC is a lightweight plugin designed to integrate with Super Page Cache, hiding the admin bar for all URLs except those with the ?swcfpc=1 parameter.
Version: 1.0
Author: Parsar2025
Author URI: https://parsar2025.ir
License: MIT
*/

add_action('after_setup_theme', 'custom_admin_bar_visibility');

function custom_admin_bar_visibility() {
    // Check if the user is logged in
    if (is_user_logged_in()) {
        // Declare the $wp variable as global
        global $wp; 
        // Get the current URL
        $current_url = home_url($wp->request) . (isset($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '');
        
        // Check if the URL has '?swcfpc=1' in it
        if (strpos($current_url, '?swcfpc=1') !== false) {
            // Show the admin bar if the URL has '?swcfpc=1'
            show_admin_bar(true);
        } else {
            // Hide the admin bar if the URL does not have '?swcfpc=1'
            show_admin_bar(false);
        }
    } else {
        // If the user is not logged in, hide the admin bar
        show_admin_bar(false);
    }
}
