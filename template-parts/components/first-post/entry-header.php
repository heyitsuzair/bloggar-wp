<?php

/** Post Header File
 * 
 * 
 * @package Bloggar_WP
 */
?>

<div class="d-flex justify-content-around">

    <?php printf('<h5>%1$s : %2$s</h5>', __('Written By'), get_the_author()) ?>
    <?php printf('<h5>%1$s : %2$s</h5>', __('Update On'), get_the_date()) ?>
</div>