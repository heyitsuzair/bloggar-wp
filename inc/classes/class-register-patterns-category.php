<?php

/**
 * File To Register Block Patterns Categories
 *
 * @package Bloggar_WP
 */

namespace BLOGGAR_WP\Inc;

use BLOGGAR_WP\Inc\Traits\Singleton;

class Register_Patterns_Category
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

        add_action('init', [$this, 'register_block_patterns_categories']);
    }

    public function register_block_patterns_categories()
    {
        /**
         * Only Extend The $pattern_categories variable by one child to register your pattern category
         */
        $pattern_categories = [
            'bloggar_wp' => __('Bloggar WP', 'bloggar_wp'),
        ];
        if (function_exists('register_block_pattern_category')) {
            foreach ($pattern_categories as $category => $label) {
                register_block_pattern_category(
                    $category,
                    ['label' => __($label, 'bloggar_wp')]
                );
            }
        }
    }
}