<div wire:init="loadPopularGames" class="popular-games text-sm grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
    @forelse($popularGames as $game)

   
    <div class="game mt-8">
        <div class="relative inline-block">
            <a href="#">
                @if(isset($game['cover']['url']))
                <img src="{{Str::replaceFirst('thumb','cover_big', $game['cover']['url'])}}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
            @endif
                </a>
               
            <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-gray-800 rounded-full">
                <div class="font-semibold text-xs flex justify-center items-center h-full"> {{round($game['rating']).'%'}}</div>
            </div>
           
        </div>
        <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8"> {{$game['name']}}</a>
        <div class="text-gray-400 mt-1">
            @foreach($game['platforms'] as $platform)
            @if(array_key_exists('abbreviation',$platform))
            {{$platform['abbreviation']}},
            @endif
            @endforeach

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
  
</div> <!--end popular games-->
