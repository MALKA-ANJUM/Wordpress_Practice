<?php 

function sanabil_test_shortcuts()
{
    return "This is a test shortcut";
}
add_shortcode('SANABIL_SHORTCUT', 'sanabil_test_shortcuts');