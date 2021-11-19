<?php
// Amend ellpise found at the end of excerpt return '...' rather than '[...]'
function excerpt_more($more)
{
    global $post;
    // edit here if you like
    return '...  <a class="excerpt-read-more" href="'. get_permalink($post->ID) . '" title="'. __('Read ', 'digitalallies') . esc_attr(get_the_title($post->ID)).'">'. __('Read more &raquo;', 'digitalallies') .'</a>';
}

add_filter('excerpt_more', 'excerpt_more');