<?php

/** Content Footer File
 * 
 * 
 * @package Bloggar_WP
 */


?>

<div class="entry-footer">
    <a href="<?php esc_url(the_permalink()) ?>" class="post-title-link td-none">
        <?php
        if (is_single()) {
            the_content(sprintf(wp_kses(
                __('Continue Reading %s <span class="meta-nav">&rarr;</span>', 'bloggar_wp'),
                [
                    'span' => [
                        'class' => []
                    ],
                ],

            ), the_title('<span class="screen-reader-text">', '</span>', false)));
            wp_link_pages([
                'before' => '<div class="page-links">' . esc_html('Pages:', 'bloggar_wp') . '',
                'after' => '</div>',
            ]);
        } else {
            bloggar_the_excerpt(15);
        }


        ?>
    </a>
</div>