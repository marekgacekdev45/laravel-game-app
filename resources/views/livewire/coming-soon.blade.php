<div wire:init='loadComingSoon' class="most-anticipated-container space-y-10 mt-8">
    @forelse($comingSoon as $game)
    <div class="game flex">
        <a href="#"><img src="{{Str::replaceFirst('thumb','cover_small', $game['cover']['url'])}}" alt="game cover"
            class=" w-16 hover:opacity-75 transition ease-in-out duration-150"></a>
            <div class="ml-4">
                <a href="#" class="hover:text-gray-300">{{$game['name']}}</a>
                <div class="text-gray-400 text-sm mt-1">
                    {{Carbon\Carbon::parse($game['first_release_date'])->format('d M Y')}}</div>
            </div>
    </div>
  @empty
  <div aria-label="Loading..." role="status" class="flex items-center space-x-2 mt-12">
    <svg class="h-20 w-20 animate-spin stroke-gray-500" viewBox="0 0 256 256">
        <line x1="128" y1="32" x2="128" y2="64" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line>
        <line x1="195.9" y1="60.1" x2="173.3" y2="82.7" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="24"></line>
        <line x1="224" y1="128" x2="192" y2="128" stroke-linecap="round" stroke-linejoin="round" stroke-width="24">
        </line>
        <line x1="195.9" y1="195.9" x2="173.3" y2="173.3" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="24"></line>
        <line x1="128" y1="224" x2="128" y2="192" stroke-linecap="round" stroke-linejoin="round" stroke-width="24">
        </line>
        <line x1="60.1" y1="195.9" x2="82.7" y2="173.3" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="24"></line>
        <line x1="32" y1="128" x2="64" y2="128" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line>
        <line x1="60.1" y1="60.1" x2="82.7" y2="82.7" stroke-linecap="round" stroke-linejoin="round" stroke-width="24">
        </line>
    </svg>
    <span class="text-4xl font-medium text-gray-500">Loading...</span>
</div>
   @endforelse
</div>