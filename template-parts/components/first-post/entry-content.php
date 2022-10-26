<?php

/** Post Content File
 * 
 * 
 * @package Bloggar_WP
 */
?>

<div class="text-center mx-auto first-post mt-4 post-<?php the_ID(); ?>">
    <a href="<?php esc_url(the_permalink()); ?>" class="<?php echo esc_attr('post-thumbnail-parent'); ?>">
        <?php the_post_thumbnail('post-thumbnail'); ?>
    </a>
</div>