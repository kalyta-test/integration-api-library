<?php

namespace Kalyta\IntegrationApiLibrary;

class HttpClient
{
    const CLIENT_HOST = 'https://dev-api.rafinita.com';
    protected $client;

    public function makeClient()
    {
        $client = new \GuzzleHttp\Client(
            [
                'base_uri' => self::CLIENT_HOST,
                'headers' => [
                    'Accept' => 'application/json'
                ]
            ]
        );
        $response = $client->post('/post', []);

        return $response->getStatusCode();
    }
}