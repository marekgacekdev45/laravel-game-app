<div wire:init="loadPopularGames" class="popular-games text-sm grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
    @forelse($popularGames as $game)

   
    <div class="game mt-8">
        <div class="relative inline-block">
            <a href="{{route('games.show',Str::slug($game['name'],'-'))}}">
                @if (isset($game['cover']['url']))
                <img src="{{Str::replaceFirst('thumb','cover_big', $game['cover']['url'])}}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
            @endif
                </a>
               
            <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-gray-800 rounded-full">
                <div class="font-semibold text-xs flex justify-center items-center h-full"> {{round($game['rating']).'%'}}</div>
            </div>
           
        </div>
        <a href="{{route('games.show', Str::slug($game['name'],'-'))}}" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8"> {{$game['name']}}</a>
        <div class="text-gray-400 mt-1">
            @foreach ($game['platforms'] as $platform)
            @if (array_key_exists('abbreviation', $platform))
            {{$platform['abbreviation']}},
            @endif
            @endforeach

            </div>
    </div>
    @empty
    @foreach(range(1,12) as $game)
<div class="game mt-8 animate-pulse">
    <div class="relative inline-block">
        <div class="bg-gray-800 w-44 h-56"></div>
    </div>
    <div class="block text-transparent text-lg bg-gray-700 leading-tight rounded-md mt-3"> title goes here</div>
    <div class="inline-block text-transparent bg-gray-700 rounded-md mt-3">
        PS4, PC, Switch

    </div>
</div>
@endforeach
@endforelse 
  
</div> <!--end popular games-->
