@extends('layouts.app')

@section('content')

    <div class="bg-white shadow-lg rounded px-6 py-3 border-gray-100 border-2 mx-10">
        <form method="POST" action="/tags" class="form bg-white px-6 my-10 relative">
            @csrf
            <div class="icon bg-blue-600 text-white w-6 h-6 absolute flex items-center justify-center px-8 py-6 rounded-full" style="left:-50px">
                Create
            </div>

            <h3 class="text-3xl text-gray-900 font-semibold">New Tag</h3>
            <label class="block text-gray-700 text-lg font-bold mb-1 mt-6 pl-1" for="name">Name</label>
            <label>
                <input type="text" name="name" placeholder="Tag name" class="border p-2 w-full @error('name') border border-red-500 @enderror" value="{{ old('name') }}">
            </label>
            @error('name')
            <div class="flex-1 items-center">
                <span class="text-red-500 text-xs" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            </div>
            @enderror
            <input type="submit" value="Submit" class="w-full mt-6 bg-blue-600 hover:bg-blue-500 text-white font-semibold p-3">

        </form>
    </div>
@endsection
