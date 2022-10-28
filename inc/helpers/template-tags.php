<?php
function bloggar_the_excerpt($trim_char_count = 0)
{
    if (!has_excerpt() || $trim_char_count === 0) {
        the_excerpt();
        return;
    }

    $excerpt = wp_strip_all_tags(get_the_excerpt());

    $excerpt = substr($excerpt, 0, $trim_char_count);
    $excerpt = substr($excerpt, 0, strrpos($excerpt, ''));

    echo $excerpt . '...';
}
function bloggar_excerpt_more($more = '')
{
    if (!is_single()) {
        $more = sprintf('<a class="td-none bloggar_wp-read-more text-light" href="%1$s"><button class="mt-4 btn btn-info text-light">%2$s</button></a>', esc_url(get_permalink(get_the_ID())), __('Read More', 'bloggar_wp'));
    }

    return $more;
}