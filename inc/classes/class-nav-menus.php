<?php

/**
 * File To Register Nav Menus
 *
 * @package Bloggar_WP
 */

namespace BLOGGAR_WP\Inc;

use BLOGGAR_WP\Inc\Traits\Singleton;

class Nav_Menus
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
         @Hook To Register Nav Menus
         */
        add_action('init', [$this, 'register_nav_menus']);
    }

    public function register_nav_menus()
    {
        register_nav_menus(
            [
                'bloggar_header_menu' => __('Header Menu', 'bloggar_wp'),
                'bloggar_footer_menu' => __('Footer Menu', 'bloggar_wp'),
            ]
        );
    }
}