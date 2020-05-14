@extends('layouts.app')

@section('content')
<div class="container mx-auto h-full mt-24">
    <div class="w-full max-w-xs mx-auto">
        <div class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4 border-gray-100 border-2">
            @yield('form')
        </div>
    </div>
</div>
@endsection
