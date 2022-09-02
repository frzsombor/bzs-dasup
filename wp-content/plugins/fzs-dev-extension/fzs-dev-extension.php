<?php
/*
Plugin Name: FZS Dev Extension
Author: Zsombor Franczia
Description: © 2022 Zsombor Franczia
Version: 1.0.0
*/

/* INIT */

$user = null;

function fzs_init_user_data() {
    global $user;

    if(is_user_logged_in()) {
        $user = wp_get_current_user();
    }
}

/* ALLOWED BLOCKS */

function fzs_allowed_block_types( $allowed_blocks, $editor_context ) {
    global $user;

    if ($user && !in_array('administrator', $user->roles)) {
        return array(
            //Text category:
            'core/paragraph',    //Paragraph
            'core/heading',    //Heading
            'core/list',    //List
            //'core/preformatted',    //Preformatted
            //'core/pullquote',    //Pullquote
            //'core/table',    //Table
            //'core/verse',    //Verse

            //Media category:
            'core/image',    //Image
            //'core/gallery',    //Gallery
            //'core/audio',    //Audio
            //'core/cover',    //Cover
            //'core/file',    //File
            //'core/media-text',    //Media & Text
            //'core/video',    //Video

            //Design category:
            //'core/buttons',    //Buttons
            //'core/columns',    //Columns
            //'core/group',    //Group
            //'core/row',    //Row
            //'core/stack',    //Stack
            //'core/more',    //More
            //'core/nextpage',    //Page Break
            //'core/separator',    //Separator
            //'core/spacer',    //Spacer

            //Widgets category:
            //'core/archives',    //Archive
            //'core/calendar',    //Calendar
            //'core/categories',    //Categories
            //'core/html',    //Custom HTML
            //'core/latest-comments',    //Latest Comments
            //'core/latest-posts',    //Latest Posts
            //'core/page-list',    //Page List
            //'core/rss',    //RSS
            //'core/search',    //Search
            //'core/shortcode',    //Shortcode
            //'core/social-links',    //Social Icons
            //'core/tag-cloud',    //Tag Cloud

            //Theme category:
            //'core/navigation',    //Navigation
            //'core/site-logo',    //Site Logo
            //'core/site-title',    //Site Title
            //'core/site-tagline',    //Site Tagline
            //'core/query',    //Query Loop
            //'core/posts-list',    //Posts List
            //'core/avatar',    //Avatar
            //'core/post-title',    //Post Title
            'core/post-excerpt',    //Post Excerpt
            //'core/post-featured-image',    //Post Featured Image
            //'core/post-content',    //Post Content
            //'core/post-author',    //Post Author
            //'core/post-date',    //Post Date
            //'core/post-terms',    //Post Categories, Post Tags
            //'core/post-navigation-link',    //Next post, Previous post
            //'core/read-more',    //Read More
            //'core/comments-query-loop',    //Comments Query Loop
            //'core/post-comments-form',    //Post Comments Form
            //'core/loginout',    //Login/out
            //'core/term-description',    //Term Description
            //'core/query-title',    //Archive Title
            //'core/post-author-biography',    //Post Author Biography

            //Embeds category:
            //'core/embed',    //Embed, Twitter, Youtube, etc.
        );
    }

    return $allowed_blocks;
}

/* FINAL ACTIONS, FILTERS */

add_action('init', 'fzs_init_user_data');
add_filter('allowed_block_types_all', 'fzs_allowed_block_types', 25, 2);
