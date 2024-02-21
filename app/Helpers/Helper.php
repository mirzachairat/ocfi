<?php

if (!function_exists('customDateFormat')) {
    function customDateFormat($date, $format = 'M d Y')
    {
        return \Carbon\Carbon::parse($date)->format($format);
    }
}
