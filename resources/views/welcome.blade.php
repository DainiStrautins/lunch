@extends('layouts.app')
@section('content')
    <div class="max-w-4xl flex flex-wrap mx-auto my-12">

        <!--Main Col-->
        <div id="profile" class="w-full lg:w-3/6 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl mx-6 lg:mx-0 bg-gray-900">

            <div class="p-4 md:p-12 text-center lg:text-left">
                <!-- Image for mobile view-->
                <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/collection/190727/1080x1620')"></div>

                <h1 class="text-2xl  font-bold text-gray-100 pt-8 lg:pt-0">Prakses projekts: pusdienas</h1>
                <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-teal-500 opacity-25"></div>
                <p class="pt-4 text-base font-bold text-gray-100 flex items-center justify-center lg:justify-start">
                    <svg class="h-4 fill-current text-teal-700 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/></svg>
                    Dainis Strautiņš</p>
                <p class="pt-2 text-gray-100 text-xs lg:text-sm flex items-center justify-center lg:justify-start">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-day" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-calendar-day fa-w-14 fa-3x h-4 fill-current text-teal-700 pr-4"><path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h96c8.8 0 16 7.2 16 16v96c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-96zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z" class=""></path></svg>
                    Prakses laiks no 31.12.2019 - 12.06.2020</p>


                <div class="pt-12 pb-8">
                    <a class="bg-teal-700 hover:bg-teal-900 text-white font-bold py-2 px-4 rounded-full outline-none focus:outline-none focus:shadow-outline" href="{{route("post.index")}}">
                        Vairāk
                    </a>
                </div>
                <!-- Use https://simpleicons.org/ to find the svg for your preferred product -->

            </div>

        </div>

        <!--Img Col-->
        <div class="w-full lg:w-2/5">
            <!-- Big profile image for side bar (desktop) -->
            <img src="https://source.unsplash.com/collection/190727/1080x1620" class="rounded-none lg:rounded-r-lg shadow-2xl hidden lg:block">
            <!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->

        </div>

    </div>
@endsection
