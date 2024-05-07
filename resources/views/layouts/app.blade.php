<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laracast </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <livewire:styles />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 text-sm  ">
    <header class="flex items-center justify-between px-8 py-4">
        <!-- <a href="">laracast logo</a> -->
        <a href="#">
            <img src="{{ asset('img/logo-dark.svg') }}" alt="logo">
        </a>

        <div class="flex items-center">
            @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    <!-- Dashboard -->
                    <!-- {{ __("You're logged in!") }} -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>

                    </form>
                </a>
                @else
                <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Log in
                </a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Register
                </a>
                @endif
                @endauth
            </nav>
            @endif
        </div>
    </header>

    <main class="container mx-auto max-w-custom flex" style="max-width:1000px">

    <div class="w-70 mr-5">
            <div class="bg-white border-2 border-blue rounded-xl mt-16">

                <div class="text-center px-6 p-4 pt-6">
                @auth

                    <h3 class="font-semibold text-base">Whats in your mind!</h3>

                    Let us know what you would like and we will take a look over</p>
            @else
             <h3>Please Login To Your Account</h3>
            @endauth


                </div>
                @auth

                <livewire:create-idea />

                @else
                    <div class="my-6 text-center " >
                    <a href="{{ route('login') }}" class=" rounded-md px-3 py-2  bg-blue 300 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Log in
                    </a>


                <a href="{{ route('register') }}" class="rounded-md px-3 py-2 bg-grey ml-4 bg-sky-200 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Sign in
                </a>

                    </div>
                @endauth



            </div>

        </div>

        <div class="w-175 ">
            <nav class="flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li><a href="#" class="border-b-4 pb-3 border-blue">All Ideas(87)</a></li>
                    <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering(87)</a></li>
                    <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">In progress</a></li>
                </ul>
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">

                    <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">implemented</a></li>
                    <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">closed(55)</a></li>
                </ul>
        </div>

        </nav>
        <div class="mt-8">
            {{$slot}}
        </div>
    </main>


    </div>

</body>
<livewire:scripts />

</html>
