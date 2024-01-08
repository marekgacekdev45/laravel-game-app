<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

class ComingSoon extends Component
{

    public $comingSoon = [];

    public function loadComingSoon()
    {
        $current = Carbon::now()->timestamp;


        $comingSoonUnformatted = Http::withHeaders(config('services.igdb'))
            ->withBody(
                "fields name, cover.url, first_release_date;
               where platforms = (6,167)
               & ( first_release_date >= {$current} );
                limit 4;"

            )
            ->post('https://api.igdb.com/v4/games')->json();

            $this->comingSoon = $this->formatForView($comingSoonUnformatted);
    }
    public function render()
    {
        return view('livewire.coming-soon');
    }

    private function formatForView($games)
    {
        return collect($games)->map(function ($game){
            return collect($game)->merge([
                'slug'=>Str::slug($game['name'],'-'),
                'coverImgUrl'=> Str::replaceFirst('thumb','cover_big', $game['cover']['url']),
                'releaseDate' => Carbon::parse($game['first_release_date'])->format('d M Y')
                
            ]);
        });
    }
}
