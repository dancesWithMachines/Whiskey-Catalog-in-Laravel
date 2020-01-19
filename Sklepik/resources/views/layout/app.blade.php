<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('include.navbar')
    <div class="container">
        @yield('tresc')
    </div>
    <div class="container">
        @include('include.messages')
    </div>

    <footer
        id="footer"
        class="d-flex justify-content-center">
        <p>Sklepik z alkoholami</p>
    </footer>

</body>
</html>
