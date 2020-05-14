<div class="position-relative h-auto mb-12 mr-6">
    <div class="flex shadow-2xl border-gray-100 border-2 p-6 rounded-lg">
        <img src="https://source.unsplash.com/1080x1620/?lunch,breakfast,brunch,dinner,dessert,salad,fruits,seafood,drinks" class="w-32 h-32 rounded-full mr-6" alt="">
        <div class="flex-1">
            <h5 class="border-black pb-4 border-b border-dashed items-center text-gray-900 text-lg font-bold">{{$post->title}}<span class="float-right text-orange-600 text-xl font-bold">$ {{$post->price}}</span></h5>
            <p class="text-black mt-2">{{$post->excerpt}}</p>
        </div>
    </div>
</div>
