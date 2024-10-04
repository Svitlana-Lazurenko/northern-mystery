<?php
if (!defined('ABSPATH')) exit; ?>

<?php
// Register ACF options page

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'  => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug'  => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}
