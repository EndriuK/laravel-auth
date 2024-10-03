<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>

    <div id="app">

        @include('partials.header')
        

        <main class="d-flex">
            <div id="sidebar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item p-3">
                        <a class="nav-link text-white" href="{{url('/') }}">{{ __('Home') }}</a>
                    </li>
                </ul>
            </div>
            <div id="content">
                @yield('content')
            </div>

            
        </main>
    </div>
</body>

</html>
