<?php

use App\Phone;

if (!function_exists('phones')) {

    function phones()
    {
        $phones = Phone::get();

        return $phones;
    }

}