<?php
add_action('init', 'my_session_start');

function my_session_start()
{
    session_start();
}
