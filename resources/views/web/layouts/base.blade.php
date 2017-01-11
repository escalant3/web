<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ProteCMS - El gestor gratuito para protectoras de animales</title>

    <link rel="stylesheet" href="/css/app.css">
    <link rel="icon" href="/favicon.png" type="image/png" />
</head>
<body>

    <div id="app">

        <headermenu></headermenu>

        @yield('content')

        <customfooter></footer>

    </div>

    <script src="/js/app.js"></script>
    <script src="https://use.fontawesome.com/2d8c1723ba.js"></script>

    @include('web.partials.notification')
    @include('web.partials.googleanalytics')
</body>
</html>