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


    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">


    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">


</head>

<body class="font-sans text-base">
    <div id="app">

        <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <a href="/">
                    <img class="mx-auto h-12 w-auto" src="{{ asset('logo_gray.svg') }}" alt="Karlie Fit" />
                </a>
                <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                    Create your account
                </h2>
                <p class="mt-2 text-center text-sm leading-5 text-gray-600 max-w">
                    Already have an account?
                    <a class="font-medium text-payhere hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150" href="/login">Login</a>
                </p>
            </div>

            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                    <form class="pure-form full-width pure-form-stacked" action="{{ route('register') }}" method="post">

                        @csrf

                        <div class="mt-6">
                            <label for="name" class="block text-sm font-medium leading-5 text-gray-700">Your full name</label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="name" value="{{ old('name') }}" required autocomplete="name" autofocus class="@error('name') is-invalid @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 " type="text" name="name">
                            </div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email</label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="@error('email') is-invalid @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 " type="email">
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <label for="password" class="block text-sm font-medium leading-5 text-gray-700">Password</label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="password" name="password" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 " type="password" required autocomplete="new-password">
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <label for="password-confirm" class="block text-sm font-medium leading-5 text-gray-700">Password confirmation</label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="password-confirm" name="password_confirmation" class="@error('password') is-invalid @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 " type="password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mt-6">
                            <span class="block w-full rounded-md shadow-sm">
                                <input type="submit" name="commit" value="Register" class="w-full cursor-pointer flex justify-center py-2 px-4 border border-transparent text-sm font-bold uppercase rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            </span>
                        </div>
                    </form>
                </div>



            </div>

        </div>



    </div>
</body>

</html>