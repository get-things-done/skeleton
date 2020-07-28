@extends('layouts.base')

@section('body')
<x-navigation />

<main>
    <div class="py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="px-4 sm:flex sm:justify-between">
            <h2 class="font-sans text-2xl font-medium leading-4 text-gray-500 uppercase sm:text-xl sm:leading-7">
                @yield('title')
            </h2>
        </div>
        <!-- Replace with your content -->
        <div class="px-4 py-6 sm:px-0">
            @yield('content')
        </div>
    </div>
</main>
@endsection
