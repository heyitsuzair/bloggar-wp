<?php

/** Post Footer File
 * 
 * 
 * @package Bloggar_WP
 */
?>

<div class="text-center mx-auto first-post-footer mt-4 post-<?php the_ID(); ?>">
    <a href="<?php esc_url(the_permalink()); ?>" class="<?php echo esc_attr('post-title-link'); ?>">
        <?php the_title('<h3 class="blog-post-title">', '</h3>'); ?>
    </a>
</div>