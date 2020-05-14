@extends('layouts.app')

@section('content')
    <div class="lg:flex">
        <div class="lg:flex-1">
            <div class="container mx-auto">
                <div class="inline-block w-full">
                    <div class="grid lg:grid-cols-6 md:grid-cols-4 sm:grid-cols-2 gap-2">
                        @forelse($tags as $tag)
                            <div class="position-relative h-auto m-6">
                                <div class="lg:flex shadow-2xl border-gray-200 border-2 p-6 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 hover:border-gray-300">
                                    <a class="h-full w-full lg:flex"  href="{{route('tags.show', $tag)}}">
                                        <div class="flex-1 items-center">
                                            <div class="flex mb-4">
                                                <div class="flex mx-auto"><p class="font-bold text-gray-700 text-xl">{{$tag->name}} </p></div>
                                            </div>
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
