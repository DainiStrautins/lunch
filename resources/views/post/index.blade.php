@extends('layouts.app')

@section('content')
    <div class="flex">
        <div class="flex-1 justify-evenly">
            <div class="container mx-auto">
                    <div class="text-center mb-16 mt-16">
                        <div class="flex flex-wrap w-auto justify-center text-white rounded-lg items-center">

                            <a href="{{route('post.index')}}"
                               class="w-auto text-center py-2 px-12 rounded-l-full hover:bg-gray-900 hover:text-white {{ Request::path() === 'lunch-offers' ? 'bg-gray-900 ' : 'bg-gray-300 text-indigo-500' }}">All</a>
                            @forelse($tags as $tag)

                                <a href="{{ route('post.custom',['tags'=> $tag]) }}"  class="inline-block w-auto text-center py-2 px-12 bg-gray-300 hover:bg-gray-900 hover:text-white {{ Request::path() === str_replace ('http://127.0.0.1:8000/','',route('post.custom',['tags'=> $tag])) ? 'bg-gray-900 ' : 'bg-gray-300 text-indigo-500' }}   @if($loop->last) rounded-r-full @endif ">{{ $tag }}</a>
                            @empty
                                <div class="flex">
                                    <h1 class="items-center text-center font-bold">No records found</h1>
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-2 gap-4">
                        @forelse($posts as $post)
                            <div class="position-relative h-auto m-6">
                                <div class="lg:flex shadow-2xl border-gray-200 border-2 p-6 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 hover:border-gray-300">
                                    <a class="h-full w-full lg:flex"  href="{{route('post.show', $post)}}">
                                        <img alt="{{$post->title}}" id="image" class="w-32 h-32 rounded-full mx-auto shadow-md" src="{{ asset('storage/images/'.$post->image)}}">
                                        <div class="ml-6 flex-1 items-center">
                                            <div class="flex border-b border-dashed border-gray-600 mb-4">
                                                <div class="flex"><p class="font-bold text-gray-700 text-xl">{{$post->title}} </p></div>
                                                <div class="flex-1 text-right"><p class="font-bold text-purple-600 text-lg mb-4">${{$post->price}}</p></div>
                                            </div>
                                            <div class="flex"><p class="text-black font-bold text-lg">{{$post->excerpt}}</p></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="flex">
                                <h1 class="items-center text-center font-bold">No records found</h1>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
