<?php

if (!function_exists('dd')) {
    function dd(...$vars)
    {
        call_user_func_array('dump', $vars);
        exit;
    }
}
