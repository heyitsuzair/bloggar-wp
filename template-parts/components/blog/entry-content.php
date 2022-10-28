<?php

/** Content File
 * 
 * 
 * @package Bloggar_WP
 */
?>

<div class="entry-title">
    <a href="<?php esc_url(the_permalink()) ?>" class="post-title-link">
        <?php the_title('<h5 class="blog-post-title">', '</h5>'); ?>
    </a>
</div>