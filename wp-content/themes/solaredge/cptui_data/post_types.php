<?php

function cptui_register_my_cpts() {

/**
* Post Type: Results and awards.
*/

$labels = [
"name" => __( "Results and awards", "alliesgroup" ),
"singular_name" => __( "Result and award", "alliesgroup" ),
"menu_name" => __( "Results and awards", "alliesgroup" ),
"all_items" => __( "Results and awards", "alliesgroup" ),
];

$args = [
"label" => __( "Results and awards", "alliesgroup" ),
"labels" => $labels,
"description" => "",
"public" => true,
"publicly_queryable" => true,
"show_ui" => true,
"show_in_rest" => true,
"rest_base" => "",
"rest_controller_class" => "WP_REST_Posts_Controller",
"has_archive" => false,
"show_in_menu" => true,
"show_in_nav_menus" => true,
"delete_with_user" => false,
"exclude_from_search" => false,
"capability_type" => "post",
"map_meta_cap" => true,
"hierarchical" => false,
"rewrite" => [ "slug" => "results_and_awards", "with_front" => true ],
"query_var" => true,
"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
"show_in_graphql" => false,
];

register_post_type( "results_and_awards", $args );

/**
* Post Type: Team members.
*/

$labels = [
"name" => __( "Team members", "alliesgroup" ),
"singular_name" => __( "Team member", "alliesgroup" ),
];

$args = [
"label" => __( "Team members", "alliesgroup" ),
"labels" => $labels,
"description" => "",
"public" => true,
"publicly_queryable" => true,
"show_ui" => true,
"show_in_rest" => true,
"rest_base" => "",
"rest_controller_class" => "WP_REST_Posts_Controller",
"has_archive" => false,
"show_in_menu" => true,
"show_in_nav_menus" => true,
"delete_with_user" => false,
"exclude_from_search" => false,
"capability_type" => "post",
"map_meta_cap" => true,
"hierarchical" => false,
"rewrite" => [ "slug" => "team_members", "with_front" => true ],
"query_var" => true,
"supports" => [ "title", "editor", "thumbnail" ],
"show_in_graphql" => false,
];

register_post_type( "team_members", $args );

/**
* Post Type: Vacancies.
*/

$labels = [
"name" => __( "Vacancies", "alliesgroup" ),
"singular_name" => __( "Vacancy", "alliesgroup" ),
];

$args = [
"label" => __( "Vacancies", "alliesgroup" ),
"labels" => $labels,
"description" => "",
"public" => true,
"publicly_queryable" => true,
"show_ui" => true,
"show_in_rest" => true,
"rest_base" => "",
"rest_controller_class" => "WP_REST_Posts_Controller",
"has_archive" => false,
"show_in_menu" => true,
"show_in_nav_menus" => true,
"delete_with_user" => false,
"exclude_from_search" => false,
"capability_type" => "post",
"map_meta_cap" => true,
"hierarchical" => false,
"rewrite" => [ "slug" => "work-for-us", "with_front" => true ],
"query_var" => true,
"supports" => [ "title", "editor" ],
"show_in_graphql" => false,
];

register_post_type( "vacancy", $args );

/**
* Post Type: Annual reports and accounts.
*/

$labels = [
"name" => __( "Annual reports and accounts", "alliesgroup" ),
"singular_name" => __( "Annual report", "alliesgroup" ),
];

$args = [
"label" => __( "Annual reports and accounts", "alliesgroup" ),
"labels" => $labels,
"description" => "",
"public" => true,
"publicly_queryable" => true,
"show_ui" => true,
"show_in_rest" => true,
"rest_base" => "",
"rest_controller_class" => "WP_REST_Posts_Controller",
"has_archive" => false,
"show_in_menu" => true,
"show_in_nav_menus" => true,
"delete_with_user" => false,
"exclude_from_search" => false,
"capability_type" => "post",
"map_meta_cap" => true,
"hierarchical" => false,
"rewrite" => [ "slug" => "annual_reports", "with_front" => true ],
"query_var" => true,
"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
"show_in_graphql" => false,
];

register_post_type( "annual_reports", $args );

/**
* Post Type: Newsletters.
*/

$labels = [
"name" => __( "Newsletters", "alliesgroup" ),
"singular_name" => __( "Newsletter", "alliesgroup" ),
];

$args = [
"label" => __( "Newsletters", "alliesgroup" ),
"labels" => $labels,
"description" => "",
"public" => true,
"publicly_queryable" => true,
"show_ui" => true,
"show_in_rest" => true,
"rest_base" => "",
"rest_controller_class" => "WP_REST_Posts_Controller",
"has_archive" => false,
"show_in_menu" => true,
"show_in_nav_menus" => true,
"delete_with_user" => false,
"exclude_from_search" => false,
"capability_type" => "post",
"map_meta_cap" => true,
"hierarchical" => false,
"rewrite" => [ "slug" => "newsletters", "with_front" => true ],
"query_var" => true,
"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
"show_in_graphql" => false,
];

register_post_type( "newsletters", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
