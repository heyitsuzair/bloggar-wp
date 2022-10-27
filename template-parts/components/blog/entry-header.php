<?php

/** Content File
 * 
 * 
 * @package Bloggar_WP
 */
$place_holder = sprintf('<img src=' . BLOGGAR_WP_DIR_URI . '/assets/img/placeholder.png' . ' alt="Loading..." loading="lazy">');
?>

<div class="post-<?php the_ID();  ?>">
    <div class="text-center mx-auto row-post mt-4 post-<?php the_ID(); ?>">
        <a href="<?php esc_url(the_permalink()); ?>" class="<?php echo esc_attr('post-thumbnail-parent'); ?>">
            <?php echo has_post_thumbnail() ? the_post_thumbnail('post-thumbnail') : $place_holder; ?>


        </a>
    </div>
</div>