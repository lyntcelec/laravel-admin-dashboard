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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .main {
            display: flex;
	        flex-direction: row;
        }
        .sidebar {
            display: flex;
            width: 70px;
            flex-direction: column;
            background-color: rgb(58, 84, 107);
            height: 100vh;
            z-index: 1;
            box-shadow: 0 0 15px rgba(4, 4, 4, 0.3);
            /* justify-content: center; */
            /* align-content: center; */
        }
        .content {
	        flex: 10;
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="main">
            @auth()
                <div class="sidebar">
                    @include('layouts.navbars.sidebar')
                </div>
            @endauth
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
