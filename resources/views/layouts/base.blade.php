<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=	, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home</title>
</head>
<header>
    <div class="relative bg-white">
        <div class="mx-auto max-w-7xl px-6">
            <div class="flex items-center border-b-2 border-gray-100 py-6 justify-start space-x-10">
                <div class="flex justify-start lg:w-0 flex-1">
                    <a href="{{route('dashboard')}}">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto sm:h-10" src="{{asset('img/logo.png')}}" alt="chess logo">
                    </a>
                </div>

                <nav class="space-x-10 flex">
                    <div class="relative">
                        <a href="{{route('dashboard')}}" class="text-gray-500 group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Dashboard</a>
                    </div>
                </nav>

                <div class="items-center justify-end flex flex-1 lg:w-0">
                    <a href="{{route('login')}}" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">Sign in</a>
                    <a href="{{route('register')}}" class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Sign up</a>
                </div>
            </div>
        </div>
    </div>

    <!--
        Mobile menu, show/hide based on mobile menu state.

        Entering: "duration-200 ease-out"
        From: "opacity-0 scale-95"
        To: "opacity-100 scale-100"
        Leaving: "duration-100 ease-in"
        From: "opacity-100 scale-100"
        To: "opacity-0 scale-95"
    -->
</header>
<body>
    <div class="container" style="margin: auto;">
        @yield('content')
    </div>
</body>
</html>
