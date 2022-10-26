<?php

/**
 * File To Enqueqe CSS AND JS Files
 *
 * @package Bloggar_WP
 */

namespace BLOGGAR_WP\Inc;

use BLOGGAR_WP\Inc\Traits\Singleton;

class Assets
{
    use Singleton;


    protected function __construct()
    {

        /**
         * Setting Up Hooks
         */
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /**
         @Hook To Enqueue CSS
         */
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        /**
         @Hook To Enqueue JS
         */
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        /**
         * Registering Styles So It Can Be Enqueued Below Whenever Needed
         */
        wp_register_style('bootstrap_css', BLOGGAR_WP_DIR_URI . '/assets/libraries/bootstrap.min.css', [], false, 'all');

        wp_register_style('style_css', BLOGGAR_WP_DIR_URI . '/style.css', [], false, 'all');

        wp_register_style('index_css', BLOGGAR_WP_DIR_URI . '/assets/sass/index.css', [], filemtime(BLOGGAR_WP_DIR_PATH . '/assets/sass/index.css'), 'all');

        /**
         * Enqueuing CSS
         */
        wp_enqueue_style('bootstrap_css');
        wp_enqueue_style('style_css');
        wp_enqueue_style('index_css');
    }
    public function register_scripts()
    {
        /**
         * Registering Styles So It Can Be Enqueued Below Whenever Needed
         */
        wp_register_script('bootstrap_js', BLOGGAR_WP_DIR_URI . '/assets/libraries/bootstrap.bundle.min.js', ['jquery'], false, true);

        /**
         * Enqueuing JS
         */
        wp_enqueue_script('bootstrap_js');
    }
}