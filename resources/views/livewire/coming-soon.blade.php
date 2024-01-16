<div wire:init='loadComingSoon' class="most-anticipated-container space-y-10 mt-8">
    @forelse($comingSoon as $game)
    <x-game-card-small :game="$game"/>
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
