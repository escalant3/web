<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ProteCMS - El gestor gratuito para protectoras de animales</title>
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Jaime Sares" />

    <link rel="stylesheet" href="{{ elixir('/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.0.3/jquery-confirm.min.css">
    <link rel="icon" href="/favicon.png" type="image/png" />
</head>
<body>

    <div id="app" class="admin">

        <adminheader></adminheader>

        <div class="content container">
            <div class="columns">
                <div class="column is-3">
                    <sidebar></sidebar>
                </div>
                <div class="column is-9">
                    @yield('content')
                </div>
            </div>
        </div>

        <adminfooter></adminfooter>

    </div>

    <script src="{{ elixir('/js/app.js') }}"></script>
    <script src="https://use.fontawesome.com/2d8c1723ba.js"></script>
    <script src="/js/ckeditor/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.0.3/jquery-confirm.min.js"></script>

    <script>
        if ($('#editor').length) {
            CKEDITOR.replace('editor', {
                language: 'es',
                height: '500px',
                extraPlugins: 'uploadimage,uploadwidget',
                filebrowserUploadUrl: '{{ route('admin.upload_image', ['_token' => csrf_token()]) }}',
                imageUploadUrl: '{{ route('admin.upload_image', ['_token' => csrf_token()]) }}'
            });
        }
    </script>

    @include('web.partials.notification')
</body>
</html>