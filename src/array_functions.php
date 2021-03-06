<?php

declare(strict_types=1);

/*
 * This file is part of Helpers.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('array_is_multi')) {
    function array_is_multi(array $array)
    {
        return count($array) != count($array, 1);
    }
}

if (!function_exists('array_trim')) {
    function array_trim(array $array)
    {
        return array_map('trim', $array);
    }
}

if (!function_exists('array_lower_case')) {
    function array_lower_case(array $array)
    {
        return array_map('strtolower', $array);
    }
}

if (!function_exists('array_upper_case')) {
    function array_upper_case(array $array)
    {
        return array_map('strtoupper', $array);
    }
}

if (!function_exists('array_camel_case')) {
    function array_camel_case(array $array)
    {
        return array_map('camel_case', $array);
    }
}

if (!function_exists('array_studly_case')) {
    function array_studly_case(array $array)
    {
        return array_map('studly_case', $array);
    }
}

if (!function_exists('array_snake_case')) {
    function array_snake_case(array $array)
    {
        return array_map('snake_case', $array);
    }
}

if (!function_exists('arr_get')) {
    function arr_get(array $array, $key, $fallback = null)
    {
        return empty($array[$key]) ? $fallback : $array[$key];
    }
}
