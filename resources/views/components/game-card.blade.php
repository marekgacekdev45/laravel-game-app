<div>
    <div class="game mt-8">
        <div class="relative inline-block">
            <a href="{{ route('games.show', $game['slug']) }}">
                @if (isset($game['cover']['url']))
                    <img src="{{ $game['coverImgUrl'] }}" alt="game cover"
                        class="hover:opacity-75 transition ease-in-out duration-150">
                @endif
            </a>
            @if ($game['rating'])
                <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-gray-800 rounded-full">
                    <div class="font-semibold text-xs flex justify-center items-center h-full"> {{ $game['rating'] }}
                    </div>
                </div>
            @endif
        </div>
        <a href="{{ route('games.show', $game['slug']) }}"
            class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8"> {{ $game['name'] }}</a>
        <div class="text-gray-400 mt-1">
            {{ $game['platforms'] }}

        </div>
    </div>
</div>