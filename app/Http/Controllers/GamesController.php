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

        // $before = Carbon::now()->subMonths(12)->timestamp;
        // $after = Carbon::now()->addMonths(12)->timestamp;
        // $current = Carbon::now()->timestamp;
        // $afterFourMonths = Carbon::now()->addMonths(4)->timestamp;

        // $highestRatedGames = Http::withHeaders(config('services.igdb'))
        //     ->withBody(
        //         "fields name, cover.url, first_release_date, platforms.abbreviation, rating, total_rating_count;
        //        where platforms = (6,167)
        //        & ( first_release_date >= {$before} 
        //            & first_release_date < {$after}
        //            & total_rating_count >5);
        //         sort total_rating_count desc;
        //         limit 12;"

        //     )
        //     ->post('https://api.igdb.com/v4/games')->json();
   

            // $recentlyReviewed = Http::withHeaders(config('services.igdb'))
            // ->withBody(
            //     "fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count, summary;
            //    where platforms = (6,167)
            //    & ( first_release_date >= {$before} 
            //    & first_release_date < {$current}
            //    & rating_count >5);
            //     sort rating desc;
            //     limit 3;"

            // )
            // ->post('https://api.igdb.com/v4/games')->json();

      
            // $mostAnticipated = Http::withHeaders(config('services.igdb'))
            // ->withBody(
            //     "fields name, cover.url, first_release_date;
            //    where platforms = (6,167)
            //    & ( first_release_date >= {$current} 
            //    & first_release_date < {$afterFourMonths});
            //     limit 4;"

            // )
            // ->post('https://api.igdb.com/v4/games')->json();


            // $comingSoon = Http::withHeaders(config('services.igdb'))
            // ->withBody(
            //     "fields name, cover.url, first_release_date;
            //    where platforms = (6,167)
            //    & ( first_release_date >= {$current} );
            //     limit 4;"

            // )
            // ->post('https://api.igdb.com/v4/games')->json();


        return view('index', [
            // // 'highestRatedGames' => $highestRatedGames,
            // 'recentlyReviewed' => $recentlyReviewed,
            // 'mostAnticipated' => $mostAnticipated,
            // 'comingSoon' => $comingSoon,
        ]);
    }
}
