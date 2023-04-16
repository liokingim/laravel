<?php

namespace App\Libraries;

use Illuminate\Contracts\Cookie\Factory as CookieFactory;

class CookieReader implements CookieHandler
{
    protected $cookie;

    public function __construct(CookieFactory $cookie)
    {
        $this->cookie = $cookie;
    }

    public function get($key, $default = null)
    {
        return $this->cookie->get($key, $default);
    }

    public function set($key, $value, $minutes)
    {
        throw new \Exception('Setting cookies is not allowed in CookieReader.');
    }

    public function forget($key)
    {
        throw new \Exception('Forgetting cookies is not allowed in CookieReader.');
    }
}