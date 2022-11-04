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
    // public function testimonial_sanitize_custom_text($input)
    // {
    //     return sanitize_textarea_field($input);
    // }
    public function testimonial_sanitize_custom_url($input)
    {
        return sanitize_url($input);
    }
    public function testimonial_sanitize_custom_text($input)
    {
        return sanitize_text_field($input);
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
        /**
         * Register Customizations
         */
        $this->register_customizations($wp_customize);
    }
    public function register_customizations($wp_customize)
    {
        $this->register_testimonial_display_customization($wp_customize);
        $this->register_testimonial_image_customization($wp_customize);
        $this->register_testimonial_name_customization($wp_customize);
        $this->register_testimonial_btn_color_customization($wp_customize);
        $this->register_testimonial_btn_text_customization($wp_customize);
        $this->register_testimonial_btn_icon_customization($wp_customize);
        $this->register_testimonial_btn_link_customization($wp_customize);
    }
    public function register_testimonial_display_customization($wp_customize)
    {
        // Display Setting
        $wp_customize->add_setting('testimonial-display-setting', [
            'default' => 'Yes',
            'sanitize_callback' => [$this, 'testimonial_sanitize_custom_option']
        ]);
        // Display Control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'testimonial-display-control', [
            'label' => "Display Testimonial Footer?",
            'section' => 'testimonial-section',
            'settings' => 'testimonial-display-setting',
            'type' => 'select',
            'choices' => ['Yes' => 'Yes', 'No' => 'No'],
        ]));
    }
    public function register_testimonial_image_customization($wp_customize)
    {
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
    public function register_testimonial_name_customization($wp_customize)
    {
        // Name Setting
        $wp_customize->add_setting('testimonial-name-setting', [
            'default' => 'Muhammad Uzair',
            'sanitize_callback' => [$this, 'testimonial_sanitize_custom_text'],
        ]);
        // Name Control
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'testimonial-name-control',
                [
                    'label'    => __('Name', 'bloggar_wp'),
                    'section'  => 'testimonial-section',
                    'settings' => 'testimonial-name-setting',
                    'type'     => 'text'
                ]
            )
        );
    }
    public function register_testimonial_btn_color_customization($wp_customize)
    {
        // Button Color Setting
        $wp_customize->add_setting('testimonial-btn-color-setting', [
            'default' => '',
            'capability'        => 'edit_theme_options',
        ]);
        // Button Color Control
        $wp_customize->add_control(new WP_Customize_Color_Control(
            $wp_customize,
            'testimonial-btn-color-control',
            array(
                'label'    => __('Button Color', 'bloggar_wp'),
                'section'  => 'testimonial-section',
                'settings' => 'testimonial-btn-color-setting',
            )
        ));
    }
    public function register_testimonial_btn_text_customization($wp_customize)
    {
        // Button Text Setting
        $wp_customize->add_setting('testimonial-btn-text-setting', [
            'default' => 'Hire Me',
            'sanitize_callback' => [$this, 'testimonial_sanitize_custom_text'],
        ]);
        // Button Text Control
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'testimonial-btn-text-control',
                [
                    'label'    => __('Button Text', 'bloggar_wp'),
                    'section'  => 'testimonial-section',
                    'settings' => 'testimonial-btn-text-setting',
                    'type'     => 'text'
                ]
            )
        );
    }
    public function register_testimonial_btn_icon_customization($wp_customize)
    {
        // Button Icon Setting
        $wp_customize->add_setting('testimonial-btn-icon-setting', [
            'default' => 'fa fa-paper-plane',
            'sanitize_callback' => [$this, 'testimonial_sanitize_custom_text'],
        ]);
        // Button Icon Control
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'testimonial-btn-icon-control',
                [
                    'label'    => __('Button Icon (Font Awesome Class)', 'bloggar_wp'),
                    'section'  => 'testimonial-section',
                    'settings' => 'testimonial-btn-icon-setting',
                    'type'     => 'text'
                ]
            )
        );
    }
    public function register_testimonial_btn_link_customization($wp_customize)
    {
        // Button Link Setting
        $wp_customize->add_setting('testimonial-btn-link-setting', [
            'default' => '#',
            'sanitize_callback' => [$this, 'testimonial_sanitize_custom_text'],
        ]);
        // Button Link Control
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'testimonial-btn-link-control',
                [
                    'label'    => __('Button Link', 'bloggar_wp'),
                    'section'  => 'testimonial-section',
                    'settings' => 'testimonial-btn-link-setting',
                    'type'     => 'text'
                ]
            )
        );
    }
}