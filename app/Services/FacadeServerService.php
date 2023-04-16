<?php

namespace App\Services;

use GuzzleHttp\Client;

class FacadeServerService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => env('FACADE_SERVER_BASE_URI', 'http://facade-server.example.com'),
            'timeout' => 10,
        ]);
    }

    public function fetchData($endpoint)
    {
        try {
            $response = $this->client->get($endpoint);

            if ($response->getStatusCode() == 200) {
                return json_decode($response->getBody()->getContents(), true);
            } else {
                return [
                    'error' => 'Unable to fetch data from the facade server.',
                    'status' => $response->getStatusCode(),
                ];
            }
        } catch (\Exception $e) {
            return [
                'error' => 'Error occurred while fetching data from the facade server.',
                'message' => $e->getMessage(),
            ];
        }
    }
}