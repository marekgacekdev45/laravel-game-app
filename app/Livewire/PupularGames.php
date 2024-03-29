<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class PupularGames extends Component
{

    public $popularGames = [];

    // public function loadPopularGames(){
    //     $before = Carbon::now()->subMonths(12)->timestamp;
    //     $after = Carbon::now()->addMonths(12)->timestamp;


    //     $this->popularGames = Cache::remember('popular-games', 7, function () {
    //         return Http::withHeaders(config('services.igdb'))
    //         ->withBody(
    //             "fields name, cover.url, first_release_date, platforms.abbreviation, rating, total_rating_count;
    //            where platforms = (6,167)
    //            & ( first_release_date >= {$before} 
    //                & first_release_date < {$after}
    //                & total_rating_count >5);
    //             sort total_rating_count desc;
    //             limit 12;"

    //         )
    //         ->post('https://api.igdb.com/v4/games')->json();;
    //     });


    //     // $this->popularGames = Http::withHeaders(config('services.igdb'))
    //     // ->withBody(
    //     //     "fields name, cover.url, first_release_date, platforms.abbreviation, rating, total_rating_count;
    //     //    where platforms = (6,167)
    //     //    & ( first_release_date >= {$before} 
    //     //        & first_release_date < {$after}
    //     //        & total_rating_count >5);
    //     //     sort total_rating_count desc;
    //     //     limit 12;"

    //     // )
    //     // ->post('https://api.igdb.com/v4/games')->json();
    // }

    public function loadPopularGames()
    {

        $before = Carbon::now()->subMonths(12)->timestamp;
        $after = Carbon::now()->addMonths(12)->timestamp;

        $popularGamesUnformatted = Cache::remember('popular-games', 7, function () use ($before, $after) {

            return Http::withHeaders(config('services.igdb'))
                ->withBody(
                    "fields name,  cover.url, first_release_date, platforms.abbreviation, rating, total_rating_count, ;
                where platforms = (6,167)
                & ( first_release_date >= {$before} 
                    & first_release_date < {$after}
                    & total_rating_count > 5);
                sort total_rating_count desc;
                limit 12;"
                )
                ->post('https://api.igdb.com/v4/games')->json();
        });

        // dump($this->formatForView($popularGamesUnformatted));
        $this->popularGames = $this->formatForView($popularGamesUnformatted);
    }

    public function render()
    {
        return view('livewire.pupular-games');
    }

    private function formatForView($games)
    {
        return collect($games)->map(function ($game){
            return collect($game)->merge([
                'slug'=>Str::slug($game['name'],'-'),
                'coverImgUrl'=> Str::replaceFirst('thumb','cover_big', $game['cover']['url']),
                'rating'=>isset($game['rating']) ?round($game['rating']).'%' : null,
                'platforms'=> collect($game['platforms'])->pluck('abbreviation')->implode(', ')
            ]);
        });
    }
}
