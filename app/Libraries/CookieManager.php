<?php

namespace App\Libraries;

use Illuminate\Contracts\Cookie\Factory as CookieFactory;

class CookieManager implements CookieHandler
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
        return $this->cookie->queue($this->cookie->make($key, $value, $minutes));
    }

    public function forget($key)
    {
        return $this->cookie->queue($this->cookie->forget($key));
    }
}