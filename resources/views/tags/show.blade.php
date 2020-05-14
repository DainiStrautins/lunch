@extends('layouts.app')

@section('content')
    <div class="max-w-4xl flex flex-wrap mx-auto lg:my-12 sm:mt-64">

        <!--Main Col-->
        <div id="profile" class="w-full lg:rounded-lg shadow-2xl lg:mx-6 bg-gray-900">

            <div class="p-4 md:p-12 text-center">
                <!-- Image for mobile view-->
                 <h1 class="text-3xl font-bold text-gray-100 pt-8 lg:pt-0">  {{$tag->name}}</h1>
                @auth
                <div class="flex justify-evenly mt-4">
                        <div class="">
                            <a href="{{ route('tags.edit',$tag) }}" class="inline-block bg-purple-700 border-2 rounded-full border-purple-700 px-3 py-1 text-xs font-semibold text-white mr-2 hover:bg-transparent hover:text-purple-700 hover:border-purple-700 focus:border-purple-700">
                                #Edit-this-record</a>
                        </div>
                    <form method="POST" action="{{ action('TagsController@destroy',$tag) }}">
                        @csrf
                        @method('DELETE')
                        <div class="">
                            <button type="submit" class="inline-block bg-indigo-600 border-2 rounded-full border-indigo-600 px-3 py-1 text-xs font-semibold text-white mr-2 hover:bg-transparent hover:text-indigo-600 hover:border-indigo-600 focus:border-indigo-500">
                                #Delete-this-record</button>
                        </div>
                    </form>
                </div>
                    @endauth
            </div>
        </div>
    </div>
@endsection
