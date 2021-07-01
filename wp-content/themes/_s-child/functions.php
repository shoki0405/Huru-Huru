<?php
add_action('init', 'my_session_start');

function my_session_start()
{
    session_start();
}

// 抜粋の省略記号変更
function twpp_change_excerpt_more($more)
{
    return '・・・';
}
add_filter('excerpt_more', 'twpp_change_excerpt_more');

// 抜粋の文字数変更
function twpp_change_excerpt_length($length)
{
    return 240;
}
add_filter('excerpt_length', 'twpp_change_excerpt_length', 999);
