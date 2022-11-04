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

?>
<!--------------------------------------------------- Styling --------------------------------------------------->

<style>
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