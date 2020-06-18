<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">


    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">


</head>

<body class="font-sans text-base">
    <div id="app">
        <!-- nav -->
        <nav x-data="{ open: false }" class="bg-white relative shadow">
            <div class="max-w-6xl mx-auto px-2 sm:px-4 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex px-2 lg:px-0">
                        <div class="flex-shrink-0 flex items-center">
                            <a class="my-4" href="/">
                                <img class="block lg:hidden h-8 w-auto" src="{{ asset('icon.svg') }}" alt="">
                                <img class="hidden lg:block h-8 w-auto" src="{{ asset('logo.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="flex px-2 lg:px-0">
                        <div class="hidden lg:ml-6 lg:flex">
                            <a href="/" class="{{ Request::path() === '/' ? 'border-pink-600 text-gray-700' : 'text-gray-500' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 focus:outline-none transition duration-150 ease-in-out  border-transparent hover:text-gray-700 hover:border-green-primary">
                                Home
                            </a>


                            <!-- <div @click.away="open = false" class="relative" x-data="{ open: false }">
                                <div class="ml-8 h-full flex items-center px-1 pt-1 border-b-2 border-transparent">
                                    <button @click="open = !open" class="flex text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                        Services

                                        <svg viewBox="0 0 20 20" class="w-5 h-5 text-gray-500" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 mt-2 w-48 rounded-md shadow-lg z-50" style="display: none;">
                                    <div class="py-1 rounded-md bg-white shadow-xs">
                                        <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Cardio</a>
                                        <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Nutrition</a>
                                        <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Weightloss</a>
                                    </div>
                                </div>
                            </div> -->
                            <a href="/products" class="{{ Request::path() === 'products' ? 'border-pink-600 text-gray-700' : 'text-gray-500' }} ml-8 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                Products
                            </a>
                            <a href="/#services" class="text-gray-500 ml-8 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                Services
                            </a>
                            <a href="http://karliesnelgar.arbonne.com" target="_blank" rel="noopener noreferrer" class="text-gray-500 ml-8 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                Arbonne
                            </a>
                            <a href="/blog" class="{{ Request::path() === 'blog' ? 'border-pink-600 text-gray-700' : 'text-gray-500' }} ml-8 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                Blog
                            </a>
                            <a href="/about" class="{{ Request::path() === 'about' ? 'border-pink-600 text-gray-700' : 'text-gray-500' }} ml-8 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                About
                            </a>
                            <a href="/contact" class="{{ Request::path() === 'contact' ? 'border-pink-600 text-gray-700' : 'text-gray-500' }} ml-8 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5  hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                Contact
                            </a>
                            @if (Auth::user())
                            <form action="/logout" method="post" id="logout-form" class="ml-8 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5  hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                @csrf
                                <button type="submit" class="">Logout</button>
                            </form>
                            @endif
                        </div>
                    </div>
                    <div class="flex items-center lg:hidden">
                        <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                </div>
            </div>
            <div :class="{'block': open, 'hidden': !open}" class="hidden lg:hidden">
                <div class="pt-2 pb-3">
                    <a href="/" class=" border-transparent text-gray-500 hover:text-gray-700 hover:border-green-primary block pl-3 pr-4 py-2 border-l-4 text-base font-medium bg-pink-50 focus:outline-none transition duration-150 ease-in-out">Home</a>
                    <!-- <div class="mt-1">
                        <div class="pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 transition duration-150 ease-in-out">
                            Services
                        </div>

                        <div>
                            <a href="#" class="pl-6 block pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">Cardio</a>
                            <a href="#" class="pl-6 block pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">Nutrtion</a>
                            <a href="#" class="pl-6 block pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">Weightloss</a>
                        </div>
                    </div> -->

                    <a href="/products" class="mt-1 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">Products</a>
                    <a href="/#services" class="mt-1 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">Services</a>
                    <a href="http://karliesnelgar.arbonne.com" target="_blank" rel="noopener noreferrer" class="mt-1 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">Services</a>
                    <a href="/blog" class="mt-1 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">Blog</a>
                    <a href="/about" class="mt-1 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">About</a>
                    <a href="/contact" class="mt-1 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">Contact</a>

                    @if (Auth::user())
                    <form action="/logout" method="post" id="logout-form" class="mt-1 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">
                        @csrf
                        <button type="submit" class="">Logout</button>
                    </form>
                    @endif
                </div>

            </div>
        </nav>
        <!-- main -->
        <main>
            @yield('content')
        </main>
        <!-- footer -->
        <footer>
            <div class="bg-white">
                <div class="max-w-screen-xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
                    <nav class="flex flex-wrap justify-center">
                        <div class="px-5 py-2">
                            <a href="/" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                Home
                            </a>
                        </div>
                        <div class="px-5 py-2">
                            <a href="/terms" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                Terms
                            </a>
                        </div>
                        <div class="px-5 py-2">
                            <a href="/contact" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                Contact
                            </a>
                        </div>

                    </nav>
                    <div class="mt-8 flex justify-center">
                        <a href="https://www.trainerize.me/profile/karliefit" class="ml-6 text-gray-400 hover:text-gray-500" target="_blank" rel="noopener noreferrer">
                            <span class="sr-only">Trainerize Profile</span>
                            <img class="w-6 h-6" style="" src="{{ asset('images/trainerize-icon.png') }}">
                        </a>

                        <a href="https://www.facebook.com/karliefit" target="_blank" rel="noopener noreferrer" class="ml-6 text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" role="img" viewBox="0 0 448 512">
                                <path fill="#3b5998" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z" /></svg>
                        </a>
                        <a href="http://karliesnelgar.arbonne.com" target="_blank" rel="noopener noreferrer" class="ml-6 text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Arbonne</span>
                            <img class="w-6 h-6" src="{{ asset('images/arbonne–logo.png') }}">
                        </a> </div>
                    <div class="mt-8">
                        <p class="text-center text-base leading-6 text-gray-400">
                            © 2020 KarlieFit. ABN 50 255 741 657
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>