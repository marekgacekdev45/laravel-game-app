<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

class ComingSoon extends Component
{

    public $comingSoon = [];

    public function loadComingSoon()
    {
        $current = Carbon::now()->timestamp;


        $this->comingSoon = Http::withHeaders(config('services.igdb'))
            ->withBody(
                "fields name, cover.url, first_release_date;
               where platforms = (6,167)
               & ( first_release_date >= {$current} );
                limit 4;"

            )
            ->post('https://api.igdb.com/v4/games')->json();
    }
    public function render()
    {
        return view('livewire.coming-soon');
    }
}
