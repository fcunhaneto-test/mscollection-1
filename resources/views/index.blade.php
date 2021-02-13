<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | @yield('title', 'subtitle')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link  rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- SEO meta tags and links -->
    <meta name="title" content="MSCollection">
    <meta name="description" content="Um lista com filmes e séries nos canais de streaming (app) Netflix, Amazon Prime
    Vídeo, Globoplay, Oldflix com minhas avaliações.">
    <meta name="keywords" content="filme, séries, netflix, amazon, prime, vídeos, globoplay, hbo, go, oldflix, app,
    apps, avaliações, resumos, opinião, imdb, lista, busca, atores, ator, atriz, diretor, criador, elenco">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="1 month">
    <meta name="language" content="Portuguese">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="author" content="Francisco Cunha Neto">
</head>
<body>
<div id="app">
    @guest
        <frontend :name="''" :role="''"></frontend>
    @else
        <frontend :name="'{{ auth()->user()->name }}'" :role="'{{ auth()->user()->role }}'"></frontend>
    @endif
</div>
</body>
</html>
