<?php
if (!defined('ABSPATH')) exit;

// Define constants
if (!defined('_VERSION')) {
	define('_VERSION', '1.0.0');
}

// Theme support
add_theme_support('post-thumbnails', array('project'));

// Styles and scripts
require get_template_directory() . '/inc/_scripts.php';

// Custom post types
require get_template_directory() . '/inc/_post-types.php';

// Navigation menus
require get_template_directory() . '/inc/_nav-menus.php';

// ACF blocks
require get_template_directory() . '/inc/_acf-blocks.php';

// ACF options page
require get_template_directory() . '/inc/_acf-options-page.php';
