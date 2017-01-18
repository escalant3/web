<!--

Bienvenido <3

Este proyecto es libre: https://github.com/protecms
Creado por Jaime Sares <http://jaimesares.com>

   /\„,„/\          //^ ^\\
   ( =';'=)        (/(_•_)\)
   /*♥♥*\         _/''*''\_
  (.|.|.|.|.)…   (,,,)^(,,,) 

-->
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ProteCMS - El gestor gratuito para protectoras de animales</title>
    <meta name="description" content="ProteCMS es un gestor para protectoras y refugios de animales gratuito, donde cualquier protectora podrá tener una web totalmente gratis.">
    <meta name="robots" content="index,follow" />
    <meta name="author" content="Jaime Sares" />

    <!-- OpenGraph metadata-->
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ProteCMS - El gestor gratuito para protectoras de animales" />
    <meta property="og:description" content="ProteCMS es un gestor para protectoras y refugios de animales gratuito, donde cualquier protectora podrá tener una web totalmente gratis." />
    <meta property="og:url" content="http://protecms.com" />
    <meta property="og:site_name" content="ProteCMS" />
    <meta property="og:image" content="http://protecms.com/images/logos/logo@0.5x.png" />
    <meta property='fb:app_id' content='129003970628056'/>

    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:description" content="ProteCMS es un gestor para protectoras y refugios de animales gratuito, donde cualquier protectora podrá tener una web totalmente gratis."/>
    <meta name="twitter:title" content="ProteCMS - El gestor gratuito para protectoras de animales"/>
    <meta name="twitter:site" content="@ProteCMS"/>
    <meta name="twitter:creator" content="@jaimesares"/>
    <meta name="twitter:image" content="http://protecms.com/images/logos/logo_original.png">

    <link rel="stylesheet" href="{{ elixir('/css/app.css') }}">
    <link rel="icon" href="/favicon.png" type="image/png" />
</head>
<body>

    <div id="app">

        <headermenu></headermenu>

        @yield('content')

        <customfooter></customfooter>

    </div>

    <script src="{{ elixir('/js/app.js') }}"></script>
    <script src="https://use.fontawesome.com/2d8c1723ba.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/locale/es.js"></script>

    @include('web.partials.notification')
    @include('web.partials.googleanalytics')
</body>
</html>