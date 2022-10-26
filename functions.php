<?php

/**
 * Theme Functions
 * @package aquila
 */

if (!defined('BLOGGAR_WP_DIR_PATH')) {
    define('BLOGGAR_WP_DIR_PATH', untrailingslashit(get_template_directory()));
}
if (!defined('BLOGGAR_DIR_URI')) {
    define('BLOGGAR_WP_DIR_URI', untrailingslashit(get_template_directory_uri()));
}
require_once BLOGGAR_WP_DIR_PATH . './inc/helpers/autoloader.php';

// function aquila_get_theme_instance()
// {
//     \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
// }

// aquila_get_theme_instance();