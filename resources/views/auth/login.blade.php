@extends('layouts.form')

@section('form')
    <form method="POST" action="{{ route('login') }}">
    @csrf
        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 pl-1">{{ __('E-Mail Address') }}</label>


            <input id="email" type="email" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="text-red-500 text-xs" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror



        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 mt-4 pl-1">{{ __('Password') }}</label>


            <input id="password" type="password" class="appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline @error('password') border border-red-500 @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="text-red-500 text-xs" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror


        <div class="my-3">
            <input class="border-solid border-4 border-indigo-600 h-4 w-4" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="ml-2" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>


    <div class="flex items-center justify-between">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            {{ __('Login') }}
        </button>

        @if (Route::has('password.request'))
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </div>
</form>
@endsection
