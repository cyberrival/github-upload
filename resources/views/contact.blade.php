@extends('layouts.app')

@section('content')
<div class="bg-gray-100 py-12 sm:py-16 lg:py-24">

    <div class="max-w-screen-xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto lg:max-w-none">
            <h2 class="text-lg leading-6 font-semibold text-gray-500 uppercase tracking-wider">Contact</h2>
            <p class="mt-2 text-3xl leading-9 font-extrabold text-gray-900 sm:text-4xl sm:leading-10 lg:text-5xl lg:leading-none">Let's talk</p>
            <p class="mt-2 text-lg leading-7 text-gray-700">Drop me a message about your needs or any questions you may have and I'll get back to you as soon as possible</p>
        </div>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            @if(session('message'))
            <div class="text-center py-4 lg:px-4 mb-6">
                <div class="rounded-md bg-green-50 px-4 py-3 flex items-start lg:justify-center lg:px-12 lg:py-4">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="ml-3 flex-1 md:flex md:justify-between">
                        <p class="text-sm leading-6 font-medium text-green-700">Message sent, we'll be in touch.</p>

                    </div>
                </div>

            </div>
            @endif
            <form method="POST" action="/contact">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium leading-5  text-gray-700">
                        Name
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input id="name" name="name" placeholder="Jane Doe" type="text" required="" value="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-pink focus:border-pink-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5
                ">
                        <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <label for="email" class="block text-sm font-medium leading-5  text-gray-700">
                        Email address
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input id="email" name="email" placeholder="user@example.com" type="email" required="" value="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-pink focus:border-pink-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5
                ">
                        <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <label for="subject" class="block text-sm font-medium leading-5  text-gray-700">
                        Subject
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input id="subject" name="subject" type="text" required="" value="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-pink focus:border-pink-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5
                ">
                        <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <label for="message" class="block text-sm font-medium leading-5  text-gray-700">
                        Message
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <textarea id="message" name="body" type="text" required="" value="" class="h-48 resize-none appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-pink focus:border-pink-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                        <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-pink-500 focus:outline-none transition duration-150 ease-in-out">
                            Send
                        </button>
                    </span>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection