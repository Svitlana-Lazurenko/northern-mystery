<?php
if (!defined('ABSPATH')) exit;

// Define constants
if (!defined('_VERSION')) {
	define('_VERSION', '1.0.0');
}

// Styles and scripts
require get_template_directory() . '/inc/_scripts.php';

// Custom post types
require get_template_directory() . '/inc/_post-types.php';

// Navigation menus
require get_template_directory() . '/inc/_nav-menus.php';

// ACF blocks
require get_template_directory() . '/inc/_acf-blocks.php';
