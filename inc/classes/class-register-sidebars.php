<?php

/**
 * File To Register Sidebars
 *
 * @package Bloggar_WP
 */

namespace BLOGGAR_WP\Inc;

use BLOGGAR_WP\Inc\Traits\Singleton;

class Register_Sidebars
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
         @Hooks
         */
        add_action('widgets_init', [$this, 'register_sidebars']);
    }

    public function register_sidebars()
    {
        /**
         * Only Extend The $sidebars variable by one child array in parent array to register your sidebar
         */
        $sidebars = [
            [
                'name' => 'Footer Bar 1',
                'id' => "footer-bar-1",
                'description' => 'Bar For Footer',
            ],
            [
                'name' => 'Footer Bar 2',
                'id' => "footer-bar-2",
                'description' => 'Bar For Footer',
            ],
            [
                'name' => 'Footer Bar 3',
                'id' => "footer-bar-3",
                'description' => 'Bar For Footer',
            ],
            [
                'name' => 'Footer Bar 4',
                'id' => "footer-bar-4",
                'description' => 'Bar For Footer',
            ],
            [
                'name' => 'Footer Bar 5',
                'id' => "footer-bar-5",
                'description' => 'Bar For Footer',
            ],
        ];

        foreach ($sidebars as $sidebar) {
            register_sidebar([
                'name'          => __($sidebar['name'], 'bloggar_wp'),
                'id'            => $sidebar['id'],
                'description'   => __($sidebar['description'], 'bloggar_wp'),
                'before_title'  => '<h3 class="widgettitle">',
                'after_title'   => '</h3>',
            ]);
        }
    }
}