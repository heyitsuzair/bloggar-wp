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
         @get_instance(): To Load Classes
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

        /**
         * Enqueuing CSS
         */
        wp_enqueue_style('bootstrap_css');
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