@extends('layouts.app')

@section('content')
    <div class="max-w-4xl flex flex-wrap mx-auto my-12">

        <!--Main Col-->
        <div id="profile" class="w-full rounded-lg shadow-2xl mx-6 bg-gray-900">

            <div class="p-4 md:p-12 text-center">
                <div class="grid lg:grid-cols-8 md:grid-cols-5 sm:grid-cols-4 grid-cols-2 gap-4">
                    @forelse($tags as $tag)
                        <div class="flex justify-evenly">
                            <a   @if ( $post->tags->contains('id', $tag->id) ) @else href="/lunch-offers/{{$post->id}}/store/{{$tag->id}}"  @endif class="inline-block bg-gray-200 rounded-full px-3 py-1 text-xs font-semibold mr-2 hover:bg-transparent hover:text-white hover:border-white border-2 focus:border-gray-600
                                        @if ( $post->tags->contains('id', $tag->id) )
                                        bg-indigo-500 text-white focus:border-indigo-500 hover:border-indigo-500 text-white border-indigo-500
                                    @else
                                        text-gray-700 border-gray-200
                                    @endif
                                ">#{{$tag->name}}</a>
                        </div>
                    @empty
                        <div class="flex-1 h-full items-center text-center">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-xs font-semibold text-gray-700 mr-2">#No-tags-yet</span>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
