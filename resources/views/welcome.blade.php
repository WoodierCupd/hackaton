@extends('layouts.base')
@section('content')
@endsection

<header>
    <div class="relative flex items-top justify-center">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>

        @endif
    </div>
</header>
<body>
<h1>Chess-Master</h1>
<p>Chess-Master is a web application that allows users to play chess against each other. The application is built using Laravel and Vue.js.</p>

</body>
