<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KarlieFit') }}</title>


    <meta name="robots" content="noindex" />


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">


    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>

<body class="font-sans">
    <div id="app">
        <div class="h-screen flex overflow-hidden">
            <div class="hidden md:flex md:flex-shrink-0">
                <div class="flex flex-col w-64 border-r border-gray-200 bg-gray-200 text-gray-600">
                    <div class="h-0 flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                        <div class="flex items-center flex-shrink-0 px-4">
                            <div class="flex justify-center items-center">

                                <a href="/">
                                    <img class="h-8" src="{{ asset('logo.svg') }}" />
                                </a>

                            </div>
                        </div>
                        <nav class="mt-5 flex-1 px-2 bg-gray-200">
                            <a href="/admin/products" class="mt-1 group flex items-center p-2 text-sm leading-5 font-medium rounded-md hover:text-gray-900 hover:bg-qb-green-400 focus:outline-none focus:text-gray-900 focus:bg-qb-green-400 transition ease-in-out duration-150 w-full capitalize svelte-1ipbepv active" type="button">
                                Products
                            </a>
                            <a href="/admin/posts" class="mt-1 group flex items-center p-2 text-sm leading-5 font-medium rounded-md hover:text-gray-900 hover:bg-qb-green-400 focus:outline-none focus:text-gray-900 focus:bg-qb-green-400 transition ease-in-out duration-150 w-full capitalize svelte-1ipbepv active" type="button">
                                Posts
                            </a>
                            <a href="https://stackedit.io/app#" target="_blank" rel="noreferrer noopener" class="mt-4 group flex items-center p-2 text-sm leading-5 font-medium rounded-md hover:text-gray-900 hover:bg-qb-green-400 focus:outline-none focus:text-gray-900 focus:bg-qb-green-400 transition ease-in-out duration-150 w-full capitalize svelte-1ipbepv active" type="button">
                                StackEdit
                            </a>

                        </nav>
                    </div>
                    <div class="flex-shrink-0 flex px-2 py-4">
                        <div class="mt-auto flex-1 text-gray-800">

                        </div>
                    </div>
                    <footer class="text-sm">
                        <div class="px-3 py-4 border-t text-center svelte-1ufmg7w">Copyright ©
                            <a class="hover:underline" href="/home">KarlieFit</a></div>
                    </footer>
                </div>
            </div>
            <div class="flex flex-col w-0 flex-1 overflow-hidden bg-gray-100">
                <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3"><button class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center
        rounded-md text-gray-500 hover:text-gray-900 focus:outline-none
        focus:bg-gray-200 transition ease-in-out duration-150"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                        </svg></button></div>
                <main class="flex-1 relative z-0 overflow-y-auto pt-2 pb-6 focus:outline-none
      md:py-6" tabindex="0">
                    <div class="max-w-7xl mx-auto px-4 pb-12 sm:px-6 md:px-8">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
    </div>

</body>

</html>