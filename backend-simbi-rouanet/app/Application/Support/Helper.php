<?php

namespace App\Application\Support;

class Helper
{
    public static function getGroupRoute($path)
    {
        return base_path('routes') . '/domain/' . $path;
    }
}
