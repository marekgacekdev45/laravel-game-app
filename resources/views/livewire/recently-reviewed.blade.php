<div wire:init='loadRecentlyReviewed' class="recently-reviewed-container space-y-12 mt-8 ">

    @forelse($recentlyReviewed as $game)
    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
        <div class="relative flex-none">
            <a href="#"><img src="{{Str::replaceFirst('thumb','cover_big', $game['cover']['url'])}}" alt="game cover"
                    class=" w-48 hover:opacity-75 transition ease-in-out duration-150"></a>
            <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-gray-900 rounded-full">
                <div class="font-semibold text-xs flex justify-center items-center h-full">{{round($game['rating']).'%'}}</div>
            </div>
        </div>
        <div class="ml-12"> <a href="#"
                class="block text-large font-semibold leading-tight hover:text-gray-400 mt-4"> {{$game['name']}}</a>
            <div class="text-gray-400 mt-1"> @foreach($game['platforms'] as $platform)
                @if(array_key_exists('abbreviation',$platform))
                {{$platform['abbreviation']}},
                @endif
                @endforeach</div>
            <p class="mt-6 text-gray-400 hidden md:block">
              {{Str::limit($game['summary'],200)}}
            </p>
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