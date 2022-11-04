<?php

/**
 * File To Register Color Customizer Objects
 *
 * @package Bloggar_WP
 */

namespace BLOGGAR_WP\Inc;

use BLOGGAR_WP\Inc\Traits\Singleton;
use WP_Customize_Color_Control;
use WP_Customize_Control;

class Colors_Customizer
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
         @Hook To Register Customizer Object (Custom)
         */
        add_action('customize_register', [$this, 'register_customizer_sections_custom']);
    }


    public function register_customizer_sections_custom($wp_customize)
    {
        // Initialize Section
        $this->register_color_section($wp_customize);
    }
    // Author Section,Settings And Controls
    public function register_color_section($wp_customize)
    {
        // New Panel
        $wp_customize->add_section('bloggar-color-section', [
            'title' => 'Colors',
            'priority' => 3,
            'description' => __('Customize Site Colors', 'bloggar_wp')
        ]);
        // Body Color Setting
        $wp_customize->add_setting('bloggar-body-color-settings', [
            'default' => '#000000',
            'capability' => 'edit_theme_options',
        ]);
        // Body Color Control
        $wp_customize->add_control(new WP_Customize_Color_Control(
            $wp_customize,
            'bloggar-body-color-control',
            array(
                'label'    => __('Body Color', 'bloggar_wp'),
                'section'  => 'bloggar-color-section',
                'settings' => 'bloggar-body-color-settings',
            )
        ));
        // Header Background Color Setting
        $wp_customize->add_setting('bloggar-header-bg-color-settings', [
            'default' => '#FFFFFF',
            'capability' => 'edit_theme_options',
        ]);
        // Header Background Color Control
        $wp_customize->add_control(new WP_Customize_Color_Control(
            $wp_customize,
            'bloggar-header-bg-color-control',
            array(
                'label'    => __('Header Background Color', 'bloggar_wp'),
                'section'  => 'bloggar-color-section',
                'settings' => 'bloggar-header-bg-color-settings',
            )
        ));
        // Header Text Color Setting
        $wp_customize->add_setting('bloggar-header-text-color-settings', [
            'default' => '#000000',
            'capability' => 'edit_theme_options',
        ]);
        // Header Text Color Control
        $wp_customize->add_control(new WP_Customize_Color_Control(
            $wp_customize,
            'bloggar-header-text-color-control',
            array(
                'label'    => __('Header Text Color', 'bloggar_wp'),
                'section'  => 'bloggar-color-section',
                'settings' => 'bloggar-header-text-color-settings',
            )
        ));
        // Header Text Hover Color Setting
        $wp_customize->add_setting('bloggar-header-text-hover-color-settings', [
            'default' => '#000000',
            'capability' => 'edit_theme_options',
        ]);
        // Header Text Hover Color Control
        $wp_customize->add_control(new WP_Customize_Color_Control(
            $wp_customize,
            'bloggar-header-text-hover-color-control',
            array(
                'label'    => __('Header Text Hover Color', 'bloggar_wp'),
                'section'  => 'bloggar-color-section',
                'settings' => 'bloggar-header-text-hover-color-settings',
            )
        ));
    }
}