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

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 text-sm">
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
                    <h3 class="font-semibold text-base">Whats in your mind!</h3>Let us know what ou would like and we will take a look over</p>
                </div>
                <form action="#" method="POST" class="text-sm spacer-y-4 px-4 p-6">
                    <div>
                        <input type="text" class="w-full bg-gray-100  rounded-xl border-none placeholder-gray-900 px-4 p-2" placeholder="Your ideas">
                        </input>
                    </div>
                    <div>
                        <select name="category_add" id="category_add" class="w-full rounded-xl  bg-gray-100 mt-2 border-none px-4 py-2 form-select">
                            <option selected value="Category One">Category </option>
                            <option value="Category One">Category One</option>
                            <option value="Category Two">Category Two</option>
                            <option value="Category Three">Category Three</option>

                        </select>
                        <div>
                            <textarea id="idea" name="idea" cols="30" row=""  class="w-full bg-gray-100  rounded-xl border-none placeholder-gray-900 px-4 p-2 mt-2" placeholder="Description"> </textarea>
                        </div>
                    </div>
                    <div class="flex items-center justify-between space-x-3">
                        <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                            <svg class="text-gray-600 w-4 transform- rotate-15" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                            </svg>

                            <span> Attach </span>
                        </button>

                        <button type="submit" class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue font-semibold rounded-xl border border-blue hover:blue-hover transition duration-150 ease-in px-6 py-3 text-white">


                            <span>submit</span>
                        </button>

                    </div>

                </form>
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

</html>
