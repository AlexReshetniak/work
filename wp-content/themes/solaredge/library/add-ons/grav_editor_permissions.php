<?php
// Give editors access to gravity forms
function add_gf_cap()
{
    $role = get_role( 'editor' );
    $role->add_cap( 'gform_full_access' );
}

add_action( 'admin_init', 'add_gf_cap' );