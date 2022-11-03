<?php

/**
 * Footer For the Theme.
 *
 * @package Bloggar_WP
 */
?>

</div>
</div>
<?php
get_theme_mod('testimonial-display-setting') == 'Yes' ? get_template_part('template-parts/footer/pre_footer') : "";
get_template_part('template-parts/footer/main_footer');
?>
<?php wp_footer(); ?>
</body>

</html>