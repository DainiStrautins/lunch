@extends('layouts.form')

@section('form')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="name" class="block text-gray-700 text-sm font-bold my-2 pl-1">{{ __('Name') }}</label>
            <input id="name" type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline  @error('name') border border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="text-red-500 text-xs" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        <label for="email" class="block text-gray-700 text-sm font-bold my-2 pl-1">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="text-red-500 text-xs" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        <label for="password" class="block text-gray-700 text-sm font-bold my-2 pl-1">{{ __('Password') }}</label>
            <input id="password" type="password" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="text-red-500 text-xs" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        <label for="password-confirm" class="block text-gray-700 text-sm font-bold my-2 pl-1">
            {{ __('Confirm Password') }}
        </label>
            <input id="password-confirm" type="password" class="appearance-none border rounded w-full py-2 px-3 mb-2  text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" required autocomplete="new-password">
        <div class="flex items-center justify-between mt-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mx-auto">
                {{ __('Register') }}
            </button>
        </div>
    </form>
@endsection
