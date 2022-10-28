<?php

/**
 * File To Register Block Patterns
 *
 * @package Bloggar_WP
 */

namespace BLOGGAR_WP\Inc;

use BLOGGAR_WP\Inc\Traits\Singleton;

class Register_Patterns
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

        add_action('init', [$this, 'register_block_patterns']);
    }
    public function register_block_patterns()
    {
        register_block_pattern(
            'my-plugin/my-awesome-pattern',
            array(
                'title'       => __('Two column magazine layout', 'my-theme'),
                'description' => _x('A simple magazine style two-column layout with large image and stylized text', 'my-theme'),
                'categories'  => ['bloggar_wp'],
                'content'     => '<!-- wp:columns -->
                <div class="wp-block-columns"><!-- wp:column {"className":"has-light-green-cyan-background-color has-background"} -->
                <div class="wp-block-column has-light-green-cyan-background-color has-background"><!-- wp:list {"ordered":true} -->
                <ol><li>One</li><li>Two</li></ol>
                <!-- /wp:list --></div>
                <!-- /wp:column --></div>
                <!-- /wp:columns -->'
            )
        );
    }
}