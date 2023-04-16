<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\FacadeServerService;

class CookieController extends Controller
{
    protected $cookieReader;
    protected $cookieManager;

    public function __construct(CookieReader $cookieReader, CookieManager $cookieManager)
    {
        $this->cookieReader = $cookieReader;
        $this->cookieManager = $cookieManager;
    }

    public function show(Request $request)
    {
        // 쿠키 읽기
        $value = $this->cookieReader->get('key');

        // 쿠키 설정
        $this->cookieManager->set('key', 'value', 60); // 1시간 동안 유효

        // 쿠키 삭제
        $this->cookieManager->forget('key');

        // ...
    }
}