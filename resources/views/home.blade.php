@extends('layouts.app')

@section('content')
    <div class="lg:flex">
        <div class="lg:flex-1 lg:mx-10">
            <div class="container mx-auto">
                <div class="inline-block w-full">
                    <div class="text-center mb-32 mt-24">
                        <div class="inline-block w-auto bg-white flex text-white rounded-lg">
                            <a href="javascript:;" data-filter="*" class="inline-block w-auto text-center py-2 px-12 bg-gray-900 rounded-full">All</a>
                            <a href="javascript:;" data-filter=".breakfast" class="inline-block w-auto text-center py-2 px-12 text-indigo-500 bg-gray-100">BREAKFAST</a>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="position-relative h-auto mb-12 mr-6">
                            <div class="flex shadow-2xl border-gray-100 border-2 p-6 rounded-lg">
                                <img src="https://source.unsplash.com/1080x1620/?lunch,breakfast,brunch,dinner,dessert,salad,fruits,seafood,drinks" class="w-32 h-32 rounded-full mr-6" alt="">
                                <div class="flex-1">
                                    <h5 class="border-black pb-4 border-b border-dashed items-center text-gray-900 text-lg font-bold">LASAL CHEESE<span class="float-right text-orange-600 text-xl font-bold">$ 15.00</span></h5>
                                    <p class="text-black mt-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
