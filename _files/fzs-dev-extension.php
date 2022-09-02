<?php
/*
Plugin Name: FZS Dev Extension
Author: Zsombor Franczia
Version: 1.0.0
*/

function restrict_blocks( $allowed_blocks, $post ) {
    $user_role = get_queried_object()->roles[0];
    if( !in_array( strtolower('Administrator'), $user_role ) ) {
        $allowed_blocks = array(
            'core/block',
            'core/image',
            'core/paragraph',
            'core/heading',
            'core/list'
        );
    }
    return $allowed_blocks;
}

add_filter( 'allowed_block_types', 'restrict_blocks');
