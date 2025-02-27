<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('set_active')) {
    function set_active($routes, $output = 'text-rose-900 font-bold')
    {
        return in_array(Route::currentRouteName(), (array) $routes) ? $output : 'text-gray-500 font-semibold';
    }
}
