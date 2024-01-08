@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="game-details border-b border-gray-800 pb-12 flex flex-col lg:flex-row">
            <div class="flex-none">
                <img src="{{ $game['coverUrl'] }}" alt="game cover">
            </div>
            <div class="lg:ml-12 lg:mr-64">
                <h2 class="font-semibold text-4xl leading-tight mt-1 ">{{ $game['name'] }}</h2>
                <div class="text-gray-400">
                    <span>
                        {{ $game['genres'] }}
                    </span>
                    &middot;
                    <span>{{ $game['involved_companies'] }}</span>
                    &middot;

                    <span> {{ $game['platforms'] }}</span>

                </div>
                <div class="flex flex-wrap items-center  mt-8 ">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                {{ $game['memberRating'] }}
                            </div>
                        </div>
                        <div class="ml-4 text-sm">Member <br>Score</div>
                    </div>
                    <div class="flex items-center ml-6">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                {{ $game['criticRating'] }}
                            </div>
                        </div>
                        <div class="ml-4 text-sm">Critic <br>Score</div>
                    </div>
                    <div class="flex items-center space-x-4 mt-4 lg:mt-0 md:ml-12">
                        @if($game['social']['steam'])
                        <div class=" w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center"><a href="{{$game['social']['steam']['url']}}" target="_blank"
                                class="hover:text-gray-400"><svg class="fill-white" width="24" height="24" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><path d="M31.9 0.900391C15.7 0.900391 2.1 13.5004 1 29.5004L17.6 36.4004C19 35.4004 20.7 35.0004 22.5 35.0004C22.6 35.0004 22.9 35.0004 22.9 35.0004L30.2 24.1004C30.2 24.0004 30.2 24.0004 30.2 24.0004C30.2 17.5004 35.4 12.3004 41.9 12.3004C48.4 12.3004 53.7 17.5004 53.7 24.0004C53.7 30.5004 48.5 35.7004 42 35.7004C41.9 35.7004 41.9 35.7004 41.7 35.7004L31.1 43.3004C31.1 43.4004 31.1 43.6004 31.1 43.7004C31.1 48.5004 27.2 52.6004 22.2 52.6004C18 52.6004 14.3 49.5004 13.6 45.6004L2 40.5004C5.7 53.5004 17.8 63.2004 31.9 63.2004C49 63.1004 63 49.2004 63 32.0004C63 14.8004 49 0.900391 31.9 0.900391Z"/><path d="M20.4016 48.1L16.6016 46.6C17.3016 48 18.4016 49.3 20.0016 49.8C23.2016 51.2 27.2016 49.7 28.6016 46.3C29.3016 44.6 29.3016 42.9 28.6016 41.2C27.9016 39.5 26.6016 38.2 25.1016 37.5C23.5016 36.8 21.9016 36.9 20.3016 37.4L24.2016 39.1C26.6016 40.2 27.9016 43 26.9016 45.4C25.8016 47.9 23.0016 49 20.4016 48.1Z"/><path d="M49.9992 24.0006C49.9992 19.8006 46.4992 16.1006 42.0992 16.1006C37.8992 16.1006 34.1992 19.6006 34.1992 24.0006C34.1992 28.4006 37.8992 31.9006 42.0992 31.9006C46.2992 31.9006 49.9992 28.3006 49.9992 24.0006ZM36.3992 24.0006C36.3992 20.8006 39.0992 18.2006 42.1992 18.2006C45.3992 18.2006 47.9992 20.9006 47.9992 24.0006C47.9992 27.2006 45.2992 29.8006 42.1992 29.8006C38.9992 29.9006 36.3992 27.2006 36.3992 24.0006Z"/></svg></a></div> 
                        @endif
                        @if($game['social']['facebook'])
                        <div class=" w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center"><a href="{{$game['social']['facebook']['url']}}" target="_blank"
                                class="hover:text-gray-400"><svg class="fill-white" width="24" height="24" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><path d="M32 1C14.8 1 1 14.8 1 32C1 49.2 14.8 63 32 63C49.2 63 63 49.2 63 32C63 14.8 49.2 1 32 1ZM40.2 19.9C39.1 19.9 38.2 19.9 37.1 19.9C35.7 19.9 34.8 20.6 34.8 21.9C34.7 23 34.8 24.2 34.8 25.1C34.8 25.5 34.9 25.5 35.2 25.5C36.7 25.5 38.3 25.5 39.8 25.5C40.2 25.5 40.4 25.6 40.4 26.1C40.3 27.9 40 29.8 40 31.6C40 32 39.9 32 39.4 32C38.1 32 37 32 35.7 32C34.9 32 35 31.9 35 32.7C35 38.5 35 44 35 49.8C35 50.4 34.9 50.5 34.3 50.5C32.2 50.5 30.1 50.5 28 50.5C27.4 50.5 27.3 50.4 27.3 49.8C27.3 46.8 27.3 44 27.3 41.2C27.3 38.4 27.3 35.4 27.3 32.5C27.3 32.1 27.2 31.8 26.7 31.9C25.9 31.9 24.9 31.9 24 31.9C23.4 32.2 23.4 32 23.4 31.6C23.4 29.8 23.4 28.1 23.4 26.1C23.4 25.7 23.5 25.7 23.8 25.7C24.8 25.7 25.6 25.7 26.6 25.7C27.2 25.7 27.3 25.6 27.3 25C27.3 23.6 27.3 22.3 27.3 20.8C27.3 19.1 27.7 17.6 28.7 16.2C30 14.5 31.8 13.7 33.8 13.5C35.9 13.4 38 13.5 40.1 13.4C40.4 13.4 40.5 13.5 40.5 13.8C40.5 15.6 40.5 17.5 40.5 19.3C40.6 19.7 40.5 19.9 40.2 19.9Z"/></svg></a></div> 
                        @endif

                    </div>
                    <p class="mt-12">{{ $game['summary'] }}</p>
                    <div class="mt-12">
                        {{-- <button
                            class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-150">
                            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 -960 960 960" width="24">
                                <path
                                    d="m380-300 280-180-280-180v360ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                            </svg>
                            <span class="ml-2">Play Trailer</span>
                        </button> --}}

                        {{--  --}}

                        <a href="{{ $game['trailer'] }}" target="_blank"
                            class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-150">
                            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 -960 960 960" width="24">
                                <path
                                    d="m380-300 280-180-280-180v360ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                            </svg>
                            <span class="ml-2">Play Trailer</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>{{-- end game details --}}

        <div class="images-container border-b border-gray-800 pb-12 mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Images</h2>
            <div class="grid  md:grid-cols-2 lg:grid-cols-3 gap-12 mt-12">
                @foreach ($game['screenshots'] as $screenshot)
                    <div><a href="{{ $screenshot['huge'] }}">
                            <img src="{{ $screenshot['big'] }}"
                                alt="screenshot" class="hover:opacity-75 tranisiton ease-in-out duration-150"></a></div>
                @endforeach

            </div>
        </div>{{-- end images container --}}

        <div class="similar-games-container    mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Similar games</h2>
            <div class="popular-games text-sm grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12  ">
                @foreach ($game['similar_games'] as $game)
                    <div class="game mt-8">
                        <div class="relative inline-block">
                            <a href="{{ route('games.show',$game['slug']) }}"><img
                                    src="{{ $game['coverUrl']}}"
                                    alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150"></a>
                            <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-gray-800 rounded-full">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                 {{$game['rating']}}
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('games.show', Str::slug($game['name'], '-')) }}"
                            class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                            {{ $game['name'] }}</a>
                        <div class="text-gray-400 mt-1">
                            {{$game['platforms']}}
                        </div>
                    </div>
                @endforeach




            </div> <!--end popular games-->
        </div> {{-- end similar games --}}
    </div>
@endsection
