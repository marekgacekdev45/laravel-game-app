<div wire:init='loadComingSoon' class="most-anticipated-container space-y-10 mt-8">
    @forelse($comingSoon as $game)
    <div class="game flex">
        <a href="{{ route('games.show', $game['slug']) }}"><img src="{{$game['coverImgUrl']}}" alt="game cover"
            class=" w-16 hover:opacity-75 transition ease-in-out duration-150"></a>
            <div class="ml-4">
                <a href="{{ route('games.show', $game['slug']) }}" class="hover:text-gray-300">{{$game['name']}}</a>
                <div class="text-gray-400 text-sm mt-1">
                    {{$game['releaseDate']}}</div>
            </div>
    </div> 
  @empty
    @foreach (range(1, 4) as $game)
        <div class="game flex">
            <div class="bg-gray-800 w-16 h-20 flex-none "></div>
            <div class="ml-4">
                <div class="bg-gray-700 text-transparent rounded-md leading-tight">title goes here today</div>
                <div class="bg-gray-700 text-transparent rounded-md leading-tight mt-1 inline-block">12 stycznia</div>
                
            </div>
        </div>
@endforeach
        @endforelse
</div>
