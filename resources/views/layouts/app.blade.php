<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Suntic') }}</title>

    <!-- Styles boostrap 4 -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- styles personal -->
    <link href="/admin/style.css" rel="stylesheet">

    <!-- fa fa -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- alertas -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.preload')
        
    </div>
</body>

</html>
