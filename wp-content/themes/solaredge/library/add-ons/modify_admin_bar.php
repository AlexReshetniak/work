<?php
// Remove unwanted items from the top bar of the WordPress admin interface
function modify_admin_bar()
{
    global $wp_admin_bar;

    // define elements to remove
    $nodes = array(
        'about',
        'wporg',
        'documentation',
        'support-forums',
        'feedback',
        'comments',
        'customize',
        'customize-widgets',
        'customize-background',
        'themes',
        'dashboard',
        'widgets',
        'menus'
    );

    foreach ($nodes as $node) {
        $wp_admin_bar->remove_node($node);
    }
}

add_action('wp_before_admin_bar_render', 'modify_admin_bar');
