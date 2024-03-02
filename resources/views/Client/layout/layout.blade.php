<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Это описание самого лучшего сайта, то есть - вашего сайта!">
    <meta name="keywords" content="Это ключевые слова для индексирования вашей страницы">
    <meta name="author" content="Гробовик Максим">
    <meta name="robots" content="index">
    <title>Golden rus</title>
    <link rel="shortcut icon" href="{{asset('/assets/img/4d9206dcf6d0704010f1.svg')}}" type="image/x-icon">
    <script defer="defer" src="{{asset('/assets/javascript/app.js')}}"></script><link href="./assets/style/app.css" rel="stylesheet">
</head>
<body>
{{-- Подключаем header инклуд --}}
<div role="doc-index" class="application__root" id="app-root">
    @include('client.include.header')
    @yield('content')
    @include('client.include.footer')
</div>
<!-- JAVASCRIPT FILES -->


</body>
</html>
