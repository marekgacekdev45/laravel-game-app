<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
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
                "fields websites.*, cover.url, name, genres.name, involved_companies.company.name, platforms.name, summary, videos.video_id, screenshots.url, similar_games.cover.url, similar_games.name, similar_games.rating, similar_games.platforms.name, slug, rating, aggregated_rating;
            where slug=\"{$slug}\";"
            )
            ->post('https://api.igdb.com/v4/games')->json();

        dump($game);

        abort_if(!$game, 404);

        return view('show', [
            'game' => $this->formatGameForView($game[0])
        ]);
    }

    private function formatGameForView($game)
    {
        $temp = collect($game)->merge([
            'coverUrl' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
            'genres' => collect($game['genres'])->pluck('name')->implode(', '),
            'involved_companies' => $game['involved_companies'][0]['company']['name'],
            'platforms' => collect($game['platforms'])->pluck('name')->implode(', '),
            'memberRating' => array_key_exists('rating', $game) ? round($game['rating']) . '%' : '0%',
            'criticRating' => array_key_exists('aggregated_rating', $game) ? round($game['aggregated_rating']) . '%' : '0%',
            'trailer' => "https://youtube.com/watch/" .  $game['videos'][0]['video_id'],
            'screenshots' => collect($game['screenshots'])->map(function ($screenshot) {
                return [
                    'big' => Str::replaceFirst('thumb', 'screenshot_big', $screenshot['url']),
                    'huge' => Str::replaceFirst('thumb', 'screenshot_huge', $screenshot['url']),
                ];
            })->take(9),
            'similar_games' => collect($game['similar_games'])->map(function ($game) {
                return collect($game)->merge([
                    'slug' => Str::slug($game['name'], '-'),
                    'coverUrl' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
                    'platforms' => collect($game['platforms'])->pluck('name')->implode(', '),
                    'rating' => array_key_exists('rating', $game) ? round($game['rating']) . '%' : '0%',

                ]);
            })->take(6),
            'social'=>[
                'steam' => collect($game['websites'])->filter(function ($website){
                    return Str::contains($website['url'],'steam');
                })->first(),
                'facebook' => collect($game['websites'])->filter(function ($website){
                    return Str::contains($website['url'],'facebook');
                })->first(),
                'twitter' => collect($game['websites'])->filter(function ($website){
                    return Str::contains($website['url'],'twitter');
                })->first(),
                'instagram' => collect($game['websites'])->filter(function ($website){
                    return Str::contains($website['url'],'instagram');
                })->first(),
            ]


        ]);

        dump($temp);
        return $temp;
    }
}
