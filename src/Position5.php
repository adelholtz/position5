<?php

namespace Position5;

/**
 *
 */
class p5
{
    public static function getFromArray($arr, $key, $default = '')
    {
        if (!empty($arr[$key])) {
            return $arr[$key];
        }
        return $default;
    }
}
