@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="game-details border-b border-gray-800 pb-12 flex flex-col lg:flex-row">
            <div class="flex-none">
                <img src="{{ asset('luigi.jpg') }}" alt="game cover">
            </div>
            <div class="lg:ml-12 lg:mr-64">
                <h2 class="font-semibold text-4xl leading-tight mt-1 ">Luigi's Mansion 3</h2>
                <div class="text-gray-400">
                    <span>Adventure, Platform</span>
                    &middot;
                    <span>Nintendo</span>
                    &middot;
                    <span>Switch</span>
                </div>
                <div class="flex flex-wrap items-center  mt-8 ">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">90%</div>
                        </div>
                        <div class="ml-4 text-sm">Member <br>Score</div>
                    </div>
                    <div class="flex items-center ml-6">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">88%</div>
                        </div>
                        <div class="ml-4 text-sm">Critic <br>Score</div>
                    </div>
                    <div class="flex items-center space-x-4 mt-4 lg:mt-0 lg:ml-12">
                        <div class=" w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center"><a href="#"
                                class="hover:text-gray-400"><svg class="fill-white w-5 h-5"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                    <path
                                        d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-40-82v-78q-33 0-56.5-23.5T360-320v-40L168-552q-3 18-5.5 36t-2.5 36q0 121 79.5 212T440-162Zm276-102q20-22 36-47.5t26.5-53q10.5-27.5 16-56.5t5.5-59q0-98-54.5-179T600-776v16q0 33-23.5 56.5T520-680h-80v80q0 17-11.5 28.5T400-560h-80v80h240q17 0 28.5 11.5T600-440v120h40q26 0 47 15.5t29 40.5Z" />
                                </svg></a></div>
                        <div class=" w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center"><a href="#"
                                class="hover:text-gray-400">a</a></div>
                        <div class=" w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center"><a href="#"
                                class="hover:text-gray-400">a</a></div>

                    </div>
                    <p class="mt-12">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam odio esse facilis
                        tenetur, autem voluptatibus! Harum iusto aliquam deserunt commodi?</p>
                    <div class="mt-12">
                        <button
                            class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-150">
                            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 -960 960 960" width="24">
                                <path
                                    d="m380-300 280-180-280-180v360ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                            </svg>
                            <span class="ml-2">Play Trailer</span>

                        </button>
                    </div>
                </div>
            </div>
        </div>{{-- end game details --}}

        <div class="images-container border-b border-gray-800 pb-12 mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Images</h2>
            <div class="grid  md:grid-cols-2 lg:grid-cols-3 gap-12 mt-12">
                <div><a href="#">
                        <img src="{{ asset('screenshot1.jpg') }}" alt="screenshot"
                            class="hover:opacity-75 tranisiton ease-in-out duration-150"></a></div>
                <div><a href="#">
                        <img src="{{ asset('screenshot2.jpg') }}" alt="screenshot"
                            class="hover:opacity-75 tranisiton ease-in-out duration-150"></a></div>
                <div><a href="#">
                        <img src="{{ asset('screenshot3.jpg') }}" alt="screenshot"
                            class="hover:opacity-75 tranisiton ease-in-out duration-150"></a></div>
                <div><a href="#">
                        <img src="{{ asset('screenshot4.jpg') }}" alt="screenshot"
                            class="hover:opacity-75 tranisiton ease-in-out duration-150"></a></div>
                <div><a href="#">
                        <img src="{{ asset('screenshot5.jpg') }}" alt="screenshot"
                            class="hover:opacity-75 tranisiton ease-in-out duration-150"></a></div>
                <div><a href="#">
                        <img src="{{ asset('screenshot6.jpg') }}" alt="screenshot"
                            class="hover:opacity-75 tranisiton ease-in-out duration-150"></a></div>

            </div>
        </div>{{-- end images container --}}
        <div class="similar-games-container    mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Similar games</h2>
            <div class="popular-games text-sm grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12  ">
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#"><img src="{{ asset('/ff7.jpg') }}" alt="game cover"
                                class="hover:opacity-75 transition ease-in-out duration-150"></a>
                        <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full"> 80%</div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8"> Final
                        Fantasy 7 Remake</a>
                    <div class="text-gray-400 mt-1">PlayStation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#"><img src="{{ asset('/ff7.jpg') }}" alt="game cover"
                                class="hover:opacity-75 transition ease-in-out duration-150"></a>
                        <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full"> 80%</div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8"> Final
                        Fantasy 7 Remake</a>
                    <div class="text-gray-400 mt-1">PlayStation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#"><img src="{{ asset('/ff7.jpg') }}" alt="game cover"
                                class="hover:opacity-75 transition ease-in-out duration-150"></a>
                        <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full"> 80%</div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8"> Final
                        Fantasy 7 Remake</a>
                    <div class="text-gray-400 mt-1">PlayStation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#"><img src="{{ asset('/ff7.jpg') }}" alt="game cover"
                                class="hover:opacity-75 transition ease-in-out duration-150"></a>
                        <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full"> 80%</div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8"> Final
                        Fantasy 7 Remake</a>
                    <div class="text-gray-400 mt-1">PlayStation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#"><img src="{{ asset('/ff7.jpg') }}" alt="game cover"
                                class="hover:opacity-75 transition ease-in-out duration-150"></a>
                        <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full"> 80%</div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8"> Final
                        Fantasy 7 Remake</a>
                    <div class="text-gray-400 mt-1">PlayStation 4</div>
                </div>



            </div> <!--end popular games-->
        </div> {{-- end similar games --}}
    </div>
@endsection
