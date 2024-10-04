<?php
if (!defined('ABSPATH')) exit; ?>

<?php
// Register menus

function register_menus()
{
    register_nav_menus(array(
        'header_menu' => 'Header Menu',
        'mobile_menu' => 'Mobile Menu',
    ));
}
add_action('after_setup_theme', 'register_menus');
