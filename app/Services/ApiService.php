<?php

namespace App\Services;

use AccessTokenTrait;
use Illuminate\Support\Facades\Http;

class ApiService
{
    use AccessTokenTrait;

    public function getApiData()
    {
        // `pendingRequest`를 사용하여 새로운 HTTP 요청 인스턴스를 만듭니다.
        $request = Http::pendingRequest();

        // 요청 헤더를 설정합니다.
        $request->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $this->getAccessToken(),
        ]);

        // GET 요청을 보내고 응답을 받습니다.
        $response = $request->get('https://api.example.com/data');

        // 응답이 성공했는지 확인합니다.
        if ($response->successful()) {
            // 응답 본문을 JSON 형식으로 파싱하고 반환합니다.
            return $response->json();
        } else {
            // 오류 메시지를 반환합니다.
            return 'Error: ' . $response->status();
        }
    }

    public function sendApiData(array $data)
    {
        // `pendingRequest`를 사용하여 새로운 HTTP 요청 인스턴스를 만듭니다.
        $request = Http::pendingRequest();

        // 요청 헤더를 설정합니다.
        $request->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $this->getAccessToken(),
        ]);

        // POST 요청을 보내고 응답을 받습니다.
        $response = $request->post('https://api.example.com/data', $data);

        // 응답이 성공했는지 확인합니다.
        if ($response->successful()) {
            // 응답 본문을 JSON 형식으로 파싱하고 반환합니다.
            return $response->json();
        } else {
            // 오류 메시지를 반환합니다.
            return 'Error: ' . $response->status();
        }
    }

    public function sendApiRequest(string $method, string $url, array $data = [])
    {
        // `pendingRequest`를 사용하여 새로운 HTTP 요청 인스턴스를 만듭니다.
        $request = Http::pendingRequest();

        // 요청 헤더를 설정합니다.
        $request->withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $this->getAccessToken(),
        ]);

        // 요청 방식(GET 또는 POST)에 따라 요청을 보내고 응답을 받습니다.
        $response = $method === 'GET' ? $request->get($url) : $request->post($url, $data);

        // 응답이 성공했는지 확인합니다.
        if ($response->successful()) {
            // 응답 본문을 JSON 형식으로 파싱하고 반환합니다.
            return $response->json();
        } else {
            // 오류 메시지를 반환합니다.
            return 'Error: ' . $response->status();
        }
    }
}