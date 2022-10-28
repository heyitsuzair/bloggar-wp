<?php

/** Content Footer File
 * 
 * 
 * @package Bloggar_WP
 */


?>

<div class="entry-footer">
    <?php
    if (is_single() && !is_front_page()) {
        printf('<div class="%1$s">%2$s</div>', esc_attr('container content-container'), get_the_content());
    } else {
        !is_front_page() ? printf('<a href="%1$s" class="%2$s">%3$s</a>', esc_attr(esc_url(get_the_permalink())), esc_attr('post-title-link td-none'),  bloggar_the_excerpt(15)) : '';
    }
    ?>

</div>