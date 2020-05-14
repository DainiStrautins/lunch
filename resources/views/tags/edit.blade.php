@extends('layouts.app')

@section('content')

    <div class="bg-white shadow-lg rounded px-6 py-3 border-gray-100 border-2 mx-10">
        <form method="POST" action="{{ action('TagsController@update',$tag)}}" class="form bg-white px-6 my-10 relative" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="icon bg-blue-600 text-white w-6 h-6 absolute flex items-center justify-center px-8 py-6 rounded-full" style="left:-50px">
                Edit
            </div>
            <div class="flex">
                <div class="">
                    <h3 class="text-2xl text-gray-900 font-semibold">Edit tag</h3>
                </div>
            </div>
            <div class="flex space-x-5 mt-3 font-bold text-indigo-500">
                <div class="w-1/2">
                    <label for="title flex-1">Title
                        <input type="text" name="name" id="" placeholder="Title" class="border p-2  w-full @error('title') border border-red-500 @enderror" value="{{ $tag->name }}">
                    </label>
                </div>
            </div>
            <input type="submit" value="Submit" class="w-full mt-6 bg-blue-600 hover:bg-transparent hover:text-blue-600 hover:border-blue-600 border-2 border-blue-600 text-white font-semibold p-4 rounded-full">

        </form>
    </div>

@endsection
