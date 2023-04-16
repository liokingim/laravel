<?php

namespace App\Libraries;

interface CookieHandler
{
    public function get($key, $default = null);
    public function set($key, $value, $minutes);
    public function forget($key);
}