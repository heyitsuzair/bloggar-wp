<?php

/**
 * File To Register Customizer Styles
 *
 * @package Bloggar_WP
 */

namespace BLOGGAR_WP\Inc;

use BLOGGAR_WP\Inc\Traits\Singleton;

class Customizer_Styles
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
        add_action('wp_head', [$this, 'register_head_styles']);
    }

    public function register_head_styles()
    {
        $testimonial_button_color = get_theme_mod('testimonial-btn-color-setting');
        $body_color = get_theme_mod('bloggar-body-color-settings');
        $header_bg_color = get_theme_mod('bloggar-header-bg-color-settings');
        $header_text_color = get_theme_mod('bloggar-header-text-color-settings');
        $header_text_hover_color = get_theme_mod('bloggar-header-text-hover-color-settings');

?>
<!--------------------------------------------------- Styling --------------------------------------------------->

<style>
body {
    color: <?php echo $body_color==''? "#000000": $body_color;
    ?>;
}

#main-header {
    background-color: <?php echo $header_bg_color==''? "#FFFFFF": $header_bg_color;
    ?>;
}

.main-header .menu-header-container ul li a {
    color: <?php echo $header_text_color==''? "#000000": $header_text_color;
    ?>;
}

.main-header .menu-header-container ul li a:hover {

    color: <?php echo $header_text_hover_color==''? "#000000": $header_text_hover_color;
    ?>
}

.testi-btn,
.testi-btn:hover {
    background-color: <?php echo $testimonial_button_color;
    ?>;
}
</style>


<!--------------------------------------------------- Styling --------------------------------------------------->
<?php
    }
}
?>