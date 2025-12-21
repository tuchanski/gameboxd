<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GamebrainApiService
{

    private $apiKey;
    private $apiBaseUrl;

    public function __construct()
    {
        $this->apiKey = env('GAMEBRAIN_API_KEY');
        $this->apiBaseUrl = env('GAMEBRAIN_API_URL');
    }

    public function getGames($query) {
        $response = Http::withToken($this->apiKey)
            ->get($this->apiBaseUrl . '/games', [
                'query' => $query
            ])
            ->json();

        return $response;
    }

}
