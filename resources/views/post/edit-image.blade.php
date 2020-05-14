@extends('layouts.app')

@section('content')

    <div class="bg-white shadow-lg rounded px-6 py-3 border-gray-100 border-2 mx-10">
        <form method="POST" action="/lunch-offers/{{$post->id}}/image" class="form bg-white px-6 my-10 relative" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex items-baseline space-x-2 mt-2">
                <div class="w-full px-3">
                    <div class="flex justify-evenly items-center">
                        <div class="w-full px-3">
                            <div class="flex justify-evenly items-center">
                                    <input  name="image" type="file" accept="image/*">
                                <div class="text-center">
                                    <h1>Current image</h1>
                                    <img id="image" class="w-64 float-right" src="{{ asset('storage/images/'.$post->image)}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="Submit" class="w-full mt-6 bg-blue-600 hover:bg-blue-500 text-white font-semibold p-3">
        </form>
    </div>

@endsection
