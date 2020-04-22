@extends('layouts.app')
@section('content')

<!-- products -->
<section class="bg-gray-50 py-10 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-screen-md mx-auto text-center">
        <h1 class="text-3xl pb-2 leading-9 font-extrabold text-gray-900 sm:text-4xl sm:leading-10 lg:leading-none">Products</h1>
        <p class="mt-4 pb-4 max-w-2xl text-xl leading-7 text-gray-500 lg:mx-auto">
            Explore libraries of professionally created pre-built and custom exercises, workouts, and programs that are ready for you to use.
        </p>
    </div>
    @foreach($products as $product)
    <div class="lg:flex max-w-screen-md mx-auto  rounded-lg shadow-lg mt-6">
        <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden bg-center" style="background-image: url('{{ $product->imageUrl }}')" title="{{ $product->name }}">
        </div>
        <div class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">

                <div class="text-gray-800 font-bold text-xl mb-2">{{ $product->name }}</div>
                <p class="text-gray-700 text-base">{{ $product->description }}</p>
            </div>
            <div class="flex items-center justify-between">
                <p class="text-2xl leading-none font-extrabold text-gray-700">${{ $product->price }}
                    <span class="leading-8 font-medium text-gray-500 text-xs uppercase">

                        <span class="sm:ml-0 md:ml-1">/ wk </span>
                        <span class="sm:ml-0 md:ml-1">
                            &middot;
                        </span>

                        <span class="sm:ml-0 md:ml-1">
                            {{ $product->duration }} week duration
                        </span>
                    </span>
                </p>

                <a href="{{ $product->trainerizeUrl }}" class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded">
                    Buy Now
                </a>
            </div>
        </div>
    </div>
    @endforeach
</section>

@endsection