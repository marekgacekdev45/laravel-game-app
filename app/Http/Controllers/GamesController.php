<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Facades\Http;

class GamesController extends Controller

   
{
    public function index()
    {
        $highestRatedGames = Http::withHeaders([
            'Client-ID' => 'rdmj188xu5nuzkty9pgk64zbbomnsw',
            'Authorization' => 'Bearer yi6i6hjty3r8mrrpmstmczggmpcdh2',
        ])
            ->withBody(
                'fields *; 
                where id = 1942;'
            )
            ->post('https://api.igdb.com/v4/games')->json();

        dd($highestRatedGames);
    }
}
