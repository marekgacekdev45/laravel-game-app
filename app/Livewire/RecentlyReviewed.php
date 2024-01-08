<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class RecentlyReviewed extends Component
{

    public $recentlyReviewed = [];

public function loadRecentlyReviewed(){
    $before = Carbon::now()->subMonths(12)->timestamp;
    $current = Carbon::now()->timestamp;


    $recentlyReviewedUnformatted = Http::withHeaders(config('services.igdb'))
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

    $this->recentlyReviewed = $this->formatForView($recentlyReviewedUnformatted);
}

    public function render()
    {
        return view('livewire.recently-reviewed');
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
