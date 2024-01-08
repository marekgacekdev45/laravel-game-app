<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Facades\Http;

class GamesController extends Controller


{
    public function index()
    {
        return view('index');
    }

    public function show($slug)
    {

        $game =  Http::withHeaders(config('services.igdb'))
            ->withBody(
                "fields *, cover.url, name, genres.name, involved_companies.company.name, platforms.name, summary, videos.video_id, screenshots.url, similar_games.cover.url, similar_games.name, similar_games.rating, similar_games.platforms.name, slug;
            where slug=\"{$slug}\";"
            )
            ->post('https://api.igdb.com/v4/games')->json();

        dump($game);

        abort_if(!$game,404);

        return view('show',[
            'game' =>$game[0]
        ]);
    }
}
