<?php

/**
 * File To Register Customizer Objects
 *
 * @package Bloggar_WP
 */

namespace BLOGGAR_WP\Inc;

use BLOGGAR_WP\Inc\Traits\Singleton;
use WP_Customize_Color_Control;
use WP_Customize_Control;

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
         @Hook To Register Customizer Object (Wordpress)
         */
        add_action('customize_register', [$this, 'register_customizer_sections_wp']);
        /**
         @Hook To Register Customizer Object (Custom)
         */
        add_action('customize_register', [$this, 'register_customizer_sections_custom']);
    }

    public function register_customizer_sections_wp($wp_customize)
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

    public function register_customizer_sections_custom($wp_customize)
    {
        // Initialize Section
        $this->register_author_section($wp_customize);
    }
    // Author Section,Settings And Controls
    public function register_author_section($wp_customize)
    {
        // New Panel
        $wp_customize->add_section('basic-author-section', [
            'title' => 'Author',
            'priority' => 1,
            'description' => __('Custom Author Section', 'bloggar_wp')
        ]);
        // Add Setting
        $wp_customize->add_setting('basic-author-callout-display', [
            'default' => null,
            'sanizite_callback' => [$this, 'sanitize_custom_option']
        ]);
        // Add Control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-author-callout-display-control', [
            'label' => "Display This Section?",
            'section' => 'basic-author-section',
            'settings' => 'basic-author-callout-display',
            'type' => 'select',
            'choices' => ['Yes', 'No']
        ]));
    }
}