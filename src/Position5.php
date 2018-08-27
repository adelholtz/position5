<?php

namespace Position5;

/**
 *
 */
class p5
{
    public static function getFromArray($arr, $key, $default = '')
    {
        if (!empty($arr['fileMode'])) {
            return $arr['fileMode'];
        }
        return $default;
    }
}
