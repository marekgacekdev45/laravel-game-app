<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Facades\Http;

class GamesController extends Controller


{
    // public function index()
    // {
    //     $highestRatedGames = Http::withHeaders([
    //         'Client-ID' => 'rdmj188xu5nuzkty9pgk64zbbomnsw',
    //         'Authorization' => 'Bearer yi6i6hjty3r8mrrpmstmczggmpcdh2',
    //     ])
    //         ->withBody(
    //            'fields name,rating;
    //             sort rating desc;
    //             limit 20;'

    //         )
    //         ->post('https://api.igdb.com/v4/games')->json();

    //     dd($highestRatedGames);
    // }
    public function index()
    {

        $before = Carbon::now()->subMonths(2)->timestamp;
        $after = Carbon::now()->addMonths(2)->timestamp;
        $current = Carbon::now()->timestamp;
        $afterFourMonths = Carbon::now()->addMonths(4)->timestamp;

        $highestRatedGames = Http::withHeaders(config('services.igdb'))
            ->withBody(
                "fields name, cover.url, first_release_date, platforms.abbreviation, rating;
               where platforms = (6,167)
               & ( first_release_date >= {$before} 
               & first_release_date < {$after});
                sort rating desc;
                limit 12;"

            )
            ->post('https://api.igdb.com/v4/games')->json();

            $recentlyReviewed = Http::withHeaders(config('services.igdb'))
            ->withBody(
                "fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count, summary;
               where platforms = (6,167)
               & ( first_release_date >= {$before} 
               & first_release_date < {$current}
               & rating_count >5);
                sort rating desc;
                limit 3;"

            )
            ->post('https://api.igdb.com/v4/games')->json();

      
            $mostAnticipated = Http::withHeaders(config('services.igdb'))
            ->withBody(
                "fields name, cover.url, first_release_date;
               where platforms = (6,167)
               & ( first_release_date >= {$current} 
               & first_release_date < {$afterFourMonths});
                limit 4;"

            )
            ->post('https://api.igdb.com/v4/games')->json();

        dump($mostAnticipated);

            $comingSoon = Http::withHeaders(config('services.igdb'))
            ->withBody(
                "fields name, cover.url, first_release_date;
               where platforms = (6,167)
               & ( first_release_date >= {$current} );
                limit 4;"

            )
            ->post('https://api.igdb.com/v4/games')->json();

        dump($comingSoon);

        return view('index', [
            'highestRatedGames' => $highestRatedGames,
            'recentlyReviewed' => $recentlyReviewed,
            'mostAnticipated' => $mostAnticipated,
            'comingSoon' => $comingSoon,
        ]);
    }
}
