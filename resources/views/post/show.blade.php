@extends('layouts.app')

@section('content')
    <div class="max-w-4xl flex flex-wrap mx-auto lg:my-12 sm:mt-64">

        <!--Main Col-->
        <div id="profile" class="w-full lg:rounded-lg shadow-2xl lg:mx-6 bg-gray-900">

            <div class="p-4 md:p-12 text-center">
                <!-- Image for mobile view-->
                <div class="block rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url({{ asset('storage/images/'.$post->image)}})"></div>
                <h1 class="text-3xl font-bold text-gray-100 pt-8 lg:pt-0">  {{$post->title}}</h1>
                <div class="mx-auto lg:mx-0 w-full pt-3 border-b-2 border-teal-500 opacity-25"></div>
                <p class="text-xl text-gray-100 pt-8 lg:pt-0">$ {{$post->price}}</p>
                <p class="pt-8 text-sm text-gray-100"> {{$post->body}}</p>

                <div class="flex justify-evenly flex-wrap">

                @forelse($post->tags as $tag)
                    <div class="flex-1 text-center">

                            <a href="{{ route('post.custom',['tags'=> $tag->name]) }}" class="inline-block bg-gray-200 rounded-full mt-6 mb-4 px-3 py-1 text-xs font-semibold text-gray-700 mr-2 hover:bg-transparent hover:text-white hover:border-white border-2 border-gray-200 focus:border-gray-600">#{{$tag->name}}</a>
                        </div>
                    @empty
                        <div class="flex-1 h-full items-center text-center">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-xs mt-6 mb-4 font-semibold text-gray-700 mr-2">#No-tags-yet</span>
                        </div>
                    @endforelse
                </div>
                @auth
                <div class="flex justify-evenly mt-4">


                        <form method="POST" action="{{ action('PostController@destroyTag',$post) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="inline-block bg-green-700 border-2 rounded-full border-green-700 px-3 py-1 text-xs font-semibold text-white mr-2 hover:bg-transparent hover:text-green-500 hover:border-green-700 focus:border-green-700">
                                #Remove-tags</button>
                        </form>
                    <div class="">
                        <a href="{{ route('post.tags',$post) }}" class="inline-block bg-red-700 border-2 rounded-full border-red-700 px-3 py-1 text-xs font-semibold text-white mr-2 hover:bg-transparent hover:text-red-600 hover:border-red-700 focus:border-red-700">
                            #Add-tags</a>
                    </div>
                        <div class="">
                            <a href="{{ route('post.edit',$post) }}" class="inline-block bg-purple-700 border-2 rounded-full border-purple-700 px-3 py-1 text-xs font-semibold text-white mr-2 hover:bg-transparent hover:text-purple-700 hover:border-purple-700 focus:border-purple-700">
                                #Edit-this-record</a>
                        </div>
                    <form method="POST" action="{{ action('PostController@destroy',$post) }}">
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
