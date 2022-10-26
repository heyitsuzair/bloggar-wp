<?php

/**
 * Theme Functions
 * @package Bloggar_WP
 */

if (!defined('BLOGGAR_WP_DIR_PATH')) {
    define('BLOGGAR_WP_DIR_PATH', untrailingslashit(get_template_directory()));
}
if (!defined('BLOGGAR_DIR_URI')) {
    define('BLOGGAR_WP_DIR_URI', untrailingslashit(get_template_directory_uri()));
}
require_once BLOGGAR_WP_DIR_PATH . './inc/helpers/autoloader.php';

function bloggar_get_theme_instance()
{
    \BLOGGAR_WP\Inc\BLOGGAR_WP::get_instance();
}

bloggar_get_theme_instance();