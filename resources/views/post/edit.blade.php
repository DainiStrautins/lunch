@extends('layouts.app')

@section('content')

    <div class="bg-white shadow-lg rounded px-6 py-3 border-gray-100 border-2 mx-10">
        <form method="POST" action="/lunch-offers/{{$post->id}}" class="form bg-white px-6 my-10 relative" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="icon bg-blue-600 text-white w-6 h-6 absolute flex items-center justify-center px-8 py-6 rounded-full" style="left:-50px">
                Edit
            </div>
            <div class="flex">
                <div class="">
                    <h3 class="text-2xl text-gray-900 font-semibold">Edit Lunch offer</h3>
                </div>
                <div class="flex-1">
                    <img id="image" alt="image" class="h-16 w-16 float-right rounded-full" src="{{ asset('storage/images/'.$post->image)}}">
                </div>
            </div>
            <div class="flex space-x-5 mt-3 font-bold text-indigo-500">
                <div class="w-1/2">
                    <label for="title flex-1">Title
                        <input type="text" name="title" id="" placeholder="Title" class="border p-2  w-full @error('title') border border-red-500 @enderror" value="{{ $post->title }}">
                    </label>
                </div>
                <div class="w-1/2">
                    <label for="price">Price
                        <input type="number" name="price" id="" step=".01" placeholder="Price" class="border p-2 w-full @error('number') border border-red-500 @enderror" value="{{ $post->price }}">
                    </label>
                </div>

            </div>
            <div class="flex space-x-5 mt-3 font-bold text-indigo-500">
                <div class="w-1/2">
                    <label for="excerpt">Excerpt
                        <input type="text" name="excerpt" id="" placeholder="Excerpt" class="border p-2 w-full mt-3 @error('excerpt') border border-red-500 @enderror" value="{{ $post->excerpt }}">
                    </label>
                </div>
                <div class="w-1/2">
                    <label for="body">Body
                        <input name="body" id="" placeholder="Body" class="border p-2 mt-3 w-full @error('body') border border-red-500 @enderror" value="{{ $post->body  }}">
                    </label>
                </div>
            </div>

            <div class="inline-block relative mt-4">
                @error('tags')
                <span class="text-red-500 text-xs" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                @enderror
            </div>

            <input type="submit" value="Submit" class="w-full mt-6 bg-blue-600 hover:bg-transparent hover:text-blue-600 hover:border-blue-600 border-2 border-blue-600 text-white font-semibold p-4 rounded-full">

        </form>
        <div class="flex items-baseline space-x-2 mt-2">
            <div class="w-full px-3">
                <div class="flex justify-evenly items-center">
                    <div class="mb-10 mt-4">
                        <a href="/lunch-offers/{{$post->id}}/edit/image"  class="w-full mt-6 bg-indigo-600 hover:bg-transparent hover:text-indigo-600 hover:border-indigo-600 border-2 border-indigo-600 text-white font-semibold p-4 rounded-full">
                            Edit image
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
