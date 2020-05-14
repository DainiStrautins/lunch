<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="https://img.icons8.com/office/2x/restaurant.png" type="image/x-icon" />
    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dropdown.css') }}" rel="stylesheet">
</head>
<body class="font-nunito">
    <div id="app">
        <header class="flex sticky top-0 left-0 right-0 bg-white z-30">
            <div class="p-4 mx-auto inline-flex justify-between items-center w-full max-w-screen-lg">
                <a class="group flex transform lg:hover:scale-125 transition-all duration-200" href="/">
                    <img
                        src="https://img.icons8.com/office/2x/restaurant.png"
                        alt="Logo"
                        class="h-10 w-10 mr-2"
                    >
                    <h1 class="text-2xl text-indigo-600 uppercase">Lunch</h1>
                </a>
                @guest

                    @if (!Request::is('login'))
                        <a href="{{ route('login') }}" class="px-4 py-3 text-base font-semibold text-white leading-none bg-indigo-500 hover:bg-indigo-600 rounded-lg transition-all duration-200">{{ __('Login') }}</a>

                    @else
                        <a class="px-4 py-3 text-base font-semibold text-white leading-none bg-indigo-500 hover:bg-indigo-600 rounded-lg transition-all duration-200" href="{{ route('register') }}">{{ __('Register') }}</a>
                   @endif
                @else
                    <div class="dropdown inline-block relative">
                        <button  class="inline-block px-4 py-3 text-base font-semibold text-white leading-none bg-indigo-500 hover:bg-indigo-600 rounded-lg transition-all duration-200 focus:outline-none">
                            {{ Auth::user()->name }}
                        </button>
                        <div class="pt-2">
                            <ul class="dropdown-menu hidden absolute top-auto right-0 w-48 bg-white rounded-lg shadow-lg border-2 border-gray-200 hover:border-indigo-400">
                                @if (!Request::is('/'))
                                    <li> <a href="/" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white hover:rounded-lg">Landing page</a></li>
                                @endif
                                @if (!Request::is('lunch-offers'))
                                    <li><a href="/lunch-offers" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white hover:rounded-lg">Lunch offers</a></li>
                                @endif
                                @if (!Request::is('lunch-offers/create'))
                                    <li><a href="{{route('post.create')}}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white hover:rounded-lg">Create menu offer</a></li>
                                @endif
                                @if (!Request::is('/tags'))
                                    <li><a href="{{route('tags.index')}}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white hover:rounded-lg">View tags</a></li>
                                @endif
                                @if (!Request::is('tags/create'))
                                    <li><a href="{{route('tags.create')}}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white hover:rounded-lg">Create tags</a></li>
                                @endif
                                <li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <a  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();"
                                            class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">{{ __('Logout') }}</a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endguest
            </div>
        </header>
        <main>
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    var app = new Vue({
        el: '#app',
        data: {

        },
    });
</script>

</body>
</html>
