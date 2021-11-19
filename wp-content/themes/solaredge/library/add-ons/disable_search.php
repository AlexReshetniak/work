<?php 
// Disable search functionality and return 404 page
function da_filter_query( $query, $error = true ) {
    if ( is_search() ) {
    $query->is_search = false;
    $query->query_vars[s] = false;
    $query->query[s] = false;

    // to error
    if ( $error == true )
    $query->is_404 = true;
    }
}
add_action( 'parse_query', 'da_filter_query' );