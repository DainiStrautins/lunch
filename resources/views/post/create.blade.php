@extends('layouts.app')

@section('content')

    <div class="bg-white shadow-lg rounded px-6 py-3 border-gray-100 border-2 mx-10">
        <form method="POST" action="/lunch-offers" class="form bg-white px-6 my-10 relative" enctype="multipart/form-data">
            @csrf
            <div class="icon bg-blue-600 text-white w-6 h-6 absolute flex items-center justify-center px-8 py-6 rounded-full" style="left:-50px">
                Create
            </div>

            <h3 class="text-3xl text-gray-900 font-semibold">New Lunch offer</h3>
                <label class="block text-gray-700 text-lg font-bold mb-1 mt-6 pl-1" for="title">Title</label>
            <label>
                <input type="text" name="title" id="" placeholder="Title" class="border p-2 w-full @error('title') border border-red-500 @enderror" value="{{ old('title') }}">
            </label>
                @error('title')
                <div class="flex-1 items-center">
                         <span class="text-red-500 text-xs" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                </div>
                @enderror
            <label class="block text-gray-700 text-lg font-bold mb-1 mt-6 pl-1" for="price">Price</label>
            <label>
                <input type="number" name="price" id="" step=".01" placeholder="Price" class="border p-2 w-full @error('price') border border-red-500 @enderror" value="{{ old('price') }}">
            </label>
                @error('price')
                <div class="flex-1 items-center">
                    <span class="text-red-500 text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                </div>
                @enderror
            <label class="block text-gray-700 text-lg font-bold mb-1 mt-6 pl-1" for="excerpt">Excerpt</label>
            <label>
            <input type="text" name="excerpt" id="" placeholder="Excerpt" class="border p-2 w-full @error('excerpt') border border-red-500 @enderror" value="{{ old('excerpt') }}">
            </label>
            @error('excerpt')
            <span class="text-red-500 text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror

            <label class="block text-gray-700 text-lg font-bold mb-1 mt-6 pl-1" for="body">Body</label>
            <label>
            <textarea name="body" id="" cols="10" rows="3" placeholder="Body" class="border p-2 w-full @error('body') border border-red-500 @enderror">{{ old('body') }}</textarea>
            </label>
                @error('body')
                <span class="text-red-500 text-xs" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="flex items-baseline space-x-2 mt-2">
                <div class="w-full md:w-1/2">
                    <div class="flex items-center justify-start">
                        <div class="inline-block relative w-64 mt-4 mr-6">
                            <label class="block text-gray-700 text-lg font-bold mb-1">
                                Tags
                                <select name="tags[]" multiple class="block appearance-none w-full bg-white border border-gray-400 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline @error('tags') border border-red-500 @enderror">
                                   @foreach ($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>
                            </label>
                            @error('tags')
                            <span class="text-red-500 text-xs" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="overflow-hidden relative w-32 mt-4 mb-4">
                            <input  name="image" type="file" accept="image/*" class="cursor-pointer absolute block py-2 px-4 w-full opacity-0 pin-r pin-t @error('image') border border-red-500 @enderror">
                            <button class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-2 px-4 w-full inline-flex items-center rounded-full items-center">
                                <span class="mx-auto">Image</span>
                            </button>
                        </div>
                        @error('image')
                        <span class="text-red-500 text-xs ml-3" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <input type="submit" value="Submit" class="w-full mt-6 bg-blue-600 hover:bg-blue-500 text-white font-semibold p-3">

        </form>
    </div>
@endsection
