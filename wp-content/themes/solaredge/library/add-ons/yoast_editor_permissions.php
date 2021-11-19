<?php 
// Make editors SEO managers in Yoast SEO plugin
function add_yoast_cap()
{
    $role = get_role( 'editor' );
    $role->add_cap( 'wpseo_manage_options' );
}

add_action( 'admin_init', 'add_yoast_cap' );