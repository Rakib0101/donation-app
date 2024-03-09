<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class UddoktaPayService
{
    public $client;

    public function __construct()
    {
        $this->client = Http::withHeaders([
            "RT-UDDOKTAPAY-API-KEY" => config('uddokta.api_key'),
            "Accept" => "application/json",
            "Content-Type" => "application/json"
        ])->baseUrl(config('uddokta.url'));
    }

    public function pay($fields)
    {
        try {
            $response = $this->client
                ->post("/api/checkout-v2", $fields)
                ->json();

            throw_unless(data_get($response, 'status'), data_get($response, 'message'));

            return $response;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
