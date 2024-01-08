<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GameApp</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-gray-900 text-white ">
    <header class="border-b border-gray-800">
        <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
            <div class=" flex flex-col lg:flex-row items-center mt-6 lg:mt-0">
                <a href="/">
                    <img src="{{ asset('/logo.webp') }}" alt="logo" class="w-12 flex-none"></a>
                <ul class="flex lg:ml-16 space-x-8">
                    <li><a href="#" class="hover:text-gray-400">Games</a></li>
                    <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                    <li><a href="#" class="hover:text-gray-400">Coming Soon</a></li>
                </ul>
            </div>
            <div class="flex  items-center mt-6 lg:mt-0">
                <div class="relative ">
                    <input type="text" class="bg-gray-800 text-sm rounded-full px-3 pl-8 py-1 w-64 "
                        placeholder="search...">
                    <div class="absolute top-0 flex items-center h-full ml-2">
                        <svg class="fill-white w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960 ">
                            <path
                                d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                        </svg>
                    </div>
                </div>
                <div class="ml-6">
                    <a href="#"><img src="{{ asset('avatar.jpg') }}" alt="avatar" class="rounded-full w-8"></a>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-8">
        @yield('content')
    </main>


    <footer class="border-t border-gray-800">
        <div class="container mx-auto px-4 py-6">
            Powered by <a href="#" class="underline hover:text-gray-400"> IGDB API</a>
        </div>
    </footer>
    @livewireScripts

</body>

</html>
