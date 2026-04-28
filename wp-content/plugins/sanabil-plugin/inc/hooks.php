<?php
// Actions
function sanabil_footer_text()
{
    echo 'Copyrights &copy; 2025. Sanabil Right';
}

add_action('wp_footer', 'sanabil_footer_text', 20);


function sanabil_meta_info()
{
    if(is_singular('post')){
        $title = get_the_title();
        $description = get_the_excerpt();
        echo '<meta property="og:title" content="' . $title . '" />';
        echo '<meta property="og:description" content=" ' . $description . ' " />';
    }
   
}

add_action( 'wp_head', 'sanabil_meta_info', 999);

// Filters
function sanabil_post_title($title)
{
    $emoji = '😃';
    return $emoji . $title;
}

add_filter( 'the_title', 'sanabil_post_title');