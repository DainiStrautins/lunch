@extends('layouts.form')

@section('form')
    <div class="block text-gray-700 text-sm font-bold mb-2 pl-1">{{ __('Reset Password') }}</div>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2 pl-1">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline @error('email') border border-red-500 @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2 pl-1">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 pl-1">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Reset Password') }}
                    </button>
        </form>
@endsection
