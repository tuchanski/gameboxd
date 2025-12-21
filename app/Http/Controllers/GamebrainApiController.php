<?php

namespace App\Http\Controllers;

use App\Services\GamebrainApiService;
use Illuminate\Http\Request;

class GamebrainApiController extends Controller
{

    public function index(Request $request, GamebrainApiService $gamebrainApiService) {
        $query = $request->query('query', '');

        if ($query == '') {
            dd('no query');
        }

        $data = $gamebrainApiService->getGames($query);

        dd($data);
    }
}
