<?php

namespace App\Http\Controllers;

use App\Services\GamebrainApiService;
use Illuminate\Http\Request;

class GamebrainApiController extends Controller
{

    public function index(Request $request, GamebrainApiService $gamebrainApiService) {
        $query = $request->query('query');

        if (!$query) {
            return view('gamebrain.index', [
                'data' => null,
                'query' => '',
            ]);
        }

        $data = $gamebrainApiService->getGames($query);

        return view('gamebrain.index', compact('data', 'query'));
    }
}
