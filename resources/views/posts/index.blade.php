@extends('layouts.app')
@section('seo')
<x-seo title="Blog| Karlie Fit" description="Keeping up to date with Karlie" />
@endsection
@section('content')
<div class="bg-gray-50">

    <div class="px-4 py-8 md:py-16 max-w-screen-xl mx-auto sm:px-6 lg:px-8">
        <h1 class="text-3xl md:text-5xl font-extrabold text-center text-gray-900 leading-tight">
            Blog
        </h1>

    </div>

    <div class="max-w-screen-lg  mx-auto px-4 sm:px-6 text-gray-700 text-lg">
        <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">

            <!-- posts -->
            @foreach($posts as $post)
            <div class="bg-white flex flex-col rounded-lg shadow-lg overflow-hidden">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="{{ $post->imageUrl }}" alt="">
                </div>
                <div class="flex-1 p-6 flex flex-col justify-between">
                    <div>
                        <p class="text-sm leading-5 font-medium text-pink-600">Blog</p>
                        <a href="blog/{{ $post->id }}">
                            <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">{{ $post->title }}</h3>
                        </a>
                        <p class="mt-3 text-base leading-6 text-gray-600">{{ $post->excerpt }}</p>
                        <div class="mt-6 items-center flex">
                            <div class="flex-shrink-0">

                                <img class="h-10 w-10 rounded-full" src=" {{ asset('images/karlie_profile.jpg') }}" alt="">
                            </div>
                            <div class="ml-3">
                                <p class="text-sm leading-5 font-medium text-gray-900">Karlie</p>
                                <div class="text-sm leading-5 text-gray-500">
                                    <time datetime="">{{ $post->simpleTime() }}</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-10 bg-gray-50 px-4 py-3 flex items-center justify-between :px-6">
            @if ($posts->hasPages())
            <div class="flex-1 flex justify-between sm:hidden">
                <a href="{{ $posts->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    Previous
                </a>
                <a href="{{ $posts->nextPageUrl() }}" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    Next
                </a>
            </div>

            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm leading-5 text-gray-700">
                        Showing
                        <span class="font-medium">{{ $posts->firstItem() }}</span>
                        to
                        <span class="font-medium">{{ $posts->lastItem() }}</span>
                        of
                        <span class="font-medium">{{ $posts->total() }}</span>
                        results
                    </p>
                </div>
                <div>
                    <span class="relative z-0 inline-flex shadow-sm">
                        <a href="{{ $posts->previousPageUrl() }}" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="{{ $posts->url(1) }}" class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            1
                        </a>

                        <a href="{{ $posts->url($posts->lastPage()) }}" class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            {{ $posts->lastPage() }}
                        </a>
                        <a href="{{ $posts->nextPageUrl() }}" class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
            @endif
        </div>
    </div>

</div>
@endsection