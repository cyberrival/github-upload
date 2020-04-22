@extends('layouts.app')
@section('content')
<article class="bg-gray-50 pb-10">
    <div class="px-4 py-8 md:py-16 max-w-screen-xl mx-auto sm:px-6 lg:px-8">
        <h1 class="text-3xl md:text-5xl font-extrabold text-center text-gray-900 leading-tight">
            {{ $post->title }}
        </h1>
        <div class="mt-6 items-center flex justify-center">
            <div class="flex-shrink-0">

                <img class="h-10 w-10 rounded-full" src=" {{ asset('images/karlie_profile.jpg') }}" alt="">
            </div>
            <div class="ml-3">
                <p class="text-sm leading-5 font-medium text-gray-500">by Karlie on <time datetime="">{{ $post->simpleTime() }}</time></p>



            </div>
        </div>
    </div>

    <div class=" max-w-screen-lg mx-auto">
        <img class="h-auto w-full object-cover" src="{{ $post->imageUrl }}" alt="">
    </div>
    <div class="max-w-screen-lg mt-10 mx-auto px-4 sm:px-6 text-gray-700 text-lg markdown">{{ $post->parse($post->body) }}</div>
</article>
@endsection