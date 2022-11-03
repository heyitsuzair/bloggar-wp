<?php

/**
 * File To Register Testimonial Customizer Objects
 *
 * @package Bloggar_WP
 */

namespace BLOGGAR_WP\Inc;

use BLOGGAR_WP\Inc\Traits\Singleton;
use WP_Customize_Color_Control;
use WP_Customize_Control;
use WP_Customize_Image_Control;

class Testimonial_Customizer
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
    /**
     * Sanitization ------------------------------
     */
    public function testimonial_sanitize_custom_option($input)
    {
        return ($input == 'No') ? 'No' : 'Yes';
    }
    public function testimonial_sanitize_custom_text($input)
    {
        return htmlspecialchars($input);
    }
    public function testimonial_sanitize_custom_url($input)
    {
        return filter_var($input, FILTER_SANITIZE_URL);
    }
    /**
     * Sanitization ------------------------------
     */

    public function register_customizer_sections_custom($wp_customize)
    {
        // Initialize Section
        $this->register_testimonial_section($wp_customize);
    }
    // Author Section,Settings And Controls
    public function register_testimonial_section($wp_customize)
    {
        // New Panel
        $wp_customize->add_section('testimonial-section', [
            'title' => 'Testimonial',
            'priority' => 2,
            'description' => __('Customize Testimonial Section', 'bloggar_wp')
        ]);
        // Display Setting
        $wp_customize->add_setting('testimonial-display-setting', [
            'default' => 'No',
            'sanitize_callback' => [$this, 'testimonial_sanitize_custom_option']
        ]);
        // Display Control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'testimonial-display-control', [
            'label' => "Display Testimonial Footer?",
            'section' => 'testimonial-section',
            'settings' => 'testimonial-display-setting',
            'type' => 'select',
            'choices' => ['Yes' => 'Yes', 'No' => 'No']
        ]));
        // Image Setting
        $wp_customize->add_setting('testimonial-image-setting', [
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => [$this, 'testimonial_sanitize_custom_url']
        ]);
        // Image Control
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonial-image-control', [
            'label' => "Image",
            'section' => 'testimonial-section',
            'settings' => 'testimonial-image-setting',
            'height' => 442,
            'width' => 310
        ]));
    }
}