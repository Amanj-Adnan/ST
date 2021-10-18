<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">

       <nav class="bg-gray-800 p-3 mt-0 w-full  top-0">
        <div class="container mx-auto flex flex-wrap items-center">
            <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
                <a class="text-white no-underline hover:text-white hover:no-underline" href="{{route('root')}}">
                    <span class="text-2xl pl-2"><i class="em em-grinning"></i>Summer Training</span>
                </a>
            </div>
            <div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">


                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth

                                <a href="{{ url('/dashboard') }}" class="text-sm py-2 px-4 text-gray-700 hover:text-gray-200 dark:text-gray-500 underline">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm py-2 px-4 text-gray-700 hover:text-gray-200 dark:text-gray-500 underline">Log in</a>


                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 py-2 px-4 text-sm text-gray-700 hover:text-gray-200 dark:text-gray-500 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif


            </div>
        </div>
    </nav>

      @yield('content')

    </body>
</html>
