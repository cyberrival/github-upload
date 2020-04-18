@extends('layouts.admin')

@section('content')
<div class="bg-white shadow overflow-hidden sm:rounded-lg py-6">
    <div class="mb-6 px-6  mx-auto lg:ml-0 lg:mr-auto xl:mx-0 xl:px-12 ">
        <form method="post" action="/admin/products/{{ $product->id }}" class="w-full">
            @csrf
            @method('PATCH')
            <div class="md:flex md:items-center mb-6">
                <div class="w-auto"><label for="imageUrl" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Image URL
                    </label></div>
                <div class="flex-grow"><input name="imageUrl" required="required" id="imageUrl" type="text" value="{{ $product->imageUrl }}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"></div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="w-auto"><label for="trainerizeUrl" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Trainerize Product URL
                    </label></div>
                <div class="flex-grow"><input name="trainerizeUrl" required="required" id="trainerizeUrl" type="text" value="{{ $product->trainerizeUrl }}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"></div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="w-auto"><label for="name" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Name
                    </label></div>
                <div class="flex-grow"><input name="name" required="required" id="name" type="text" value="{{ $product->name }}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"></div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="w-auto"><label for="price" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Price
                    </label></div>
                <div class="flex-grow"><input name="price" required="required" id="price" type="number" step="0.01" value="{{ $product->price }}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"></div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="w-auto"><label for="duration" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Duration in Weeks
                    </label></div>
                <div class="flex-grow"><input name="duration" required="required" id="duration" type="number" value="{{ $product->duration }}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"></div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="w-auto"><label for="description" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Description
                    </label></div>
                <div class="flex-grow">
                    <textarea class="w-full resize-y border rounded focus:outline-none focus:shadow-outline" name="description" id="description">{{ $product->description }}</textarea>

                </div>
            </div>

            <div class="md:flex md:items-center">
                <div class="w-auto"></div>
                <div class="flex-grow"><button type="submit" class="shadow bg-gray-600 hover:bg-gray-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                        Update
                    </button></div>
            </div>
        </form>
    </div>
</div>
@endsection