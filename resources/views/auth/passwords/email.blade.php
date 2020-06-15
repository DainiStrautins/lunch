@extends('layouts.form')

@section('form')
    <div class="flex justify-center">
        <div class="block text-gray-700 text-sm font-bold mb-6 text-2xl">{{ __('Reset Password') }}</div>
    </div>
    @if (session('status'))
        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="font-bold text-center">{{ session('status') }}</p>
        </div>
    @endif
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 pl-1">{{ __('E-Mail Address') }}</label>

        <input id="email" type="email" class="appearance-none border-2  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500 @error('email')    border-red-500 @enderror" name="email" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus>
        @error('email')
        <span class="text-xs text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
        @enderror
        <div class="flex justify-center pt-6">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{ __('Send Password Reset Link') }}
            </button>
        </div>
    </form>
@endsection
