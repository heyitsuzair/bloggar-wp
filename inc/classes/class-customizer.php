<?php

/**
 * File To Register Customizer Objects
 *
 * @package Bloggar_WP
 */

namespace BLOGGAR_WP\Inc;

use BLOGGAR_WP\Inc\Traits\Singleton;
use WP_Customize_Color_Control;

class Customizer
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
         @Hook To Register Customizer Object
         */
        add_action('customize_register', [$this, 'register_customizer_objects']);
    }

    public function register_customizer_objects($wp_customize)
    {
        $wp_customize->add_section('custom_css', [
            'title' => __('Custom CSS', 'bloggar_wp'),
            'description' => __('Add custom CSS here', 'bloggar_wp'),
            'panel' => '', // Not typically needed.
            'priority' => 160,
            'capability' => 'edit_theme_options',
            'theme_supports' => '', // Rarely needed.
        ]);
        $wp_customize->add_section('colors', [
            'title' => __('Background Color', 'bloggar_wp'),
            'description' => __('Choose Background Color', 'bloggar_wp'),
            'panel' => '', // Not typically needed.
            'priority' => 40,
            'capability' => 'edit_theme_options',
            'theme_supports' => '', // Rarely needed.
        ]);
    }
}