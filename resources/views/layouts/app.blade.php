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
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    @yield('style')
</head>
<body>
    <div id="app">
        @include('include.navbar')

        <div class="content">
            <main class="py-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @include('include.notification')

                    </div>
                </div>

                @yield('content')
            </main>
        </div>


    </div>


</body>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

@yield('script')

</html>
