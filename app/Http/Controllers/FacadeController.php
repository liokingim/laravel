<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\FacadeServerService;

class FacadeController extends Controller
{
    protected $facadeServerService;

    public function __construct(FacadeServerService $facadeServerService)
    {
        $this->facadeServerService = $facadeServerService;
    }

    public function show()
    {
        // 파사드 서버에서 데이터 가져오기
        $data = $this->facadeServerService->fetchData('/api/data/endpoint');

        return view('example.show', ['data' => $data]);
    }
}