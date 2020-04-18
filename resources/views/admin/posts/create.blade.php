@extends('layouts.admin')

@section('content')
<div class="bg-white shadow overflow-hidden sm:rounded-lg py-6">
    <div class="mb-6 px-6  mx-auto lg:ml-0 lg:mr-auto xl:mx-0 xl:px-12 ">
        <form method="post" action="/admin/posts/create" class="w-full">
            @csrf
            <div class="md:flex md:items-center mb-6">
                <div class="w-auto"><label for="imageUrl" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Image URL
                    </label></div>
                <div class="flex-grow"><input name="imageUrl" required="required" id="imageUrl" type="text" value="{{ old('imageUrl') }}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"></div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="w-auto"><label for="title" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Title
                    </label></div>
                <div class="flex-grow"><input name="title" required="required" id="title" type="text" value="{{ old('title') }}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"></div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="w-auto"><label for="excerpt" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Excerpt
                    </label></div>
                <div class="flex-grow">
                    <textarea class="w-full resize-y border rounded focus:outline-none focus:shadow-outline" name="excerpt" id="excerpt">{{ old('excerpt') }}</textarea>

                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="w-auto"><label for="body" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Text
                    </label></div>
                <div class="flex-grow">
                    <textarea class="w-full resize-y border rounded focus:outline-none focus:shadow-outline" name="body" id="body">{{ old('body') }}</textarea>

                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="w-auto"></div>
                <div class="flex-grow"><button type="submit" class="shadow bg-gray-600 hover:bg-gray-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                        Create
                    </button></div>
            </div>
        </form>
    </div>
</div>
@endsection